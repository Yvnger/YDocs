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
add_filter( 'manage_edit-shop_order_columns', 'add_docs_column' );
function add_docs_column( $columns ) {
    $columns['docs'] = __( 'Документы', 'woocommerce' );
    return $columns;
}

// Заполняем колонку "Документы" ссылкой на генерацию документа
add_action( 'manage_shop_order_posts_custom_column', 'add_custom_order_column_content', 10, 2 );

function add_custom_order_column_content( $column ) {
    global $post;
    if ( 'docs' === $column ) {
        $order_id = $post->ID;
        echo '<a href="' . wp_nonce_url( admin_url( 'admin-ajax.php?action=generate_docs&order_id=' . $order_id ), 'generate_docs_' . $order_id ) . '">' . __( 'Print Order', 'woodocs' ) . '</a>';
    }
}

// Подключаем библиотеку TCPDF
require_once(plugin_dir_path(__FILE__) . 'tcpdf/tcpdf.php');
