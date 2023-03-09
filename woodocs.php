<?php

/**
 * Plugin Name: WooDocs
 * Plugin URI: https://github.com/Yvnger/WooDocs
 * Description: This is a documentation plugin for WooCommerce
 * Version: 1.0
 * Author: YVNGER DEV
 * Author URI: https://example.com/
 * License: GPL2
 */


// Проверяем, что WooCommerce активирован
if (!in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    return;
}

// Добавляем колонку "Документы"
add_filter('manage_edit-shop_order_columns', 'add_docs_column');
function add_docs_column($columns)
{
    $columns['docs'] = __('Документы', 'woocommerce');
    return $columns;
}

// Заполняем колонку "Документы" ссылкой на генерацию документа
add_action('manage_shop_order_posts_custom_column', 'add_custom_order_column_content', 10, 2);

function add_custom_order_column_content($column)
{
    global $post;
    if ('docs' === $column) {
        $order_id = $post->ID;
        $order = wc_get_order($order_id);
        echo '<a href="' . wp_nonce_url(admin_url('admin-ajax.php?action=print_order&order_id=' . $order_id), 'print_order_' . $order_id) . '">' . __('Print Order', 'woodocs') . '</a>';
    }
}

// Подключаем библиотеку TCPDF
require_once(plugin_dir_path(__FILE__) . 'tcpdf/tcpdf.php');

// Обработчик Ajax запроса для генерации документа
add_action('wp_ajax_print_order', 'print_order');
add_action('wp_ajax_nopriv_print_order', 'print_order');

function print_order()
{
    // Проверяем, что пользователь имеет права на выполнение этой операции
    check_ajax_referer('print_order_' . $_REQUEST['order_id'], 'security');

    // Получаем данные о заказе
    $order_id = intval($_REQUEST['order_id']);
    $order = wc_get_order($order_id);
    if (!$order) {
        wp_die(__('Invalid order ID', 'woodocs'));
    }

    // Создаем PDF документ
    $pdf = new TCPDF();
    $pdf->AddPage();
    $pdf->SetFont('helvetica', '', 12);
    $pdf->Write(0, 'Hello, World!' . $order);

    // Выводим PDF документ
    $pdf->Output('order-' . $order_id . '.pdf', 'D');
    exit;
}
