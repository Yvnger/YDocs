<?php

/**
 * Plugin Name: YDocs
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
        echo '<a class="button" href="' . wp_nonce_url(admin_url('admin-ajax.php?action=print_order&order_id=' . $order_id), 'print_order_' . $order_id) . '" target="_blank">' . __('Распечатать заказ', 'woodocs') . '</a>';
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

    // Создаем экземпляр класса TCPDF
    $pdf = new TCPDF();

    // Создаем PDF документ
    $pdf->AddPage();

    // Устанавливаем метаданные документа
    $pdf->SetCreator('Mir-Chemodanov.ru');
    $pdf->SetAuthor('Mir-Chemodanov.ru');
    $pdf->SetTitle('Заказ ' . $order_id);

    // Добавляем заголовок
    $pdf->SetFont('dejavusans', '', 10, '', true, 'UTF-8');
    // $pdf->Write(10, 'Order #' . $order_id, '', 0, 'C');

    // Установка отступов от края страницы
    $pdf->SetMargins(10, 10, 10);

    // Добавляем дату документа
    $pdf->Cell(0, 10, $order->get_date_created()->format('d.m.Y, H:i'), 0, 1, 'L');

    $pdf->SetFont('dejavusans', '', 16, '', true, 'UTF-8');
    $pdf->SetTextColor(33, 47, 73);

    $title = "Mir-Chemodanov.ru - Оптовая продажа багажа №1 по России";
    $subtitle = "г.Москва Тел.: +7 (925) 335-74-10 E-mail: mir­chemodanov@mail.ru";

    $pdf->MultiCell(95, 10, $title, 0, 'L', false, 1, '', '', true, 0, false, true, 0, 'T', false);

    $pdf->SetFont('dejavusans', '', 10, '', true, 'UTF-8');
    $pdf->MultiCell(95, 10, $subtitle, 0, 'L', false, 0, 10, 35, true, 0, false, true, 0, 'T', false);

    /** 
     * Добавляем логотип
     * Путь, отступ слева, отступ сверху, масштаб, масштаб по вертикали
     */
    $pdf->Image(plugin_dir_path(__FILE__) . 'assets/logo.png', 110, 20, 90);

    // Рисуем разделительную линию
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->SetLineWidth(0.5);
    $pdf->Line(10, 50, 200, 50);

    // Добавляем информацию о заказе
    $pdf->SetFont('dejavusans', '', 10, '', true, 'UTF-8');

    $fullname = $order->get_billing_first_name() . ' ' . $order->get_billing_last_name();

    $address['country'] = $order->get_billing_country();
    $address['state'] = $order->get_billing_state();
    $address['city'] = $address['state'] . ', ' . $order->get_billing_city();
    $address['postcode'] = $order->get_billing_postcode();
    $address['street'] = $order->get_billing_address_1() . ' ' . $order->get_billing_address_2();

    $numnum = get_post_meta($order_id, '_saphali_lite_invoice_no', true);

    $margin_top = 8;
    $margin_left = 50;
    $font_size = 6;
    $pdf->Ln(20);

    $pdf->SetFont('dejavusans', 'B', $font_size, '', true, 'UTF-8');
    $pdf->Cell(0, $margin_top, 'Содержание заказа', 0, 1);

    $pdf->Cell($margin_left, $margin_top, 'ФИО:', 0);

    $pdf->SetFont('dejavusans', '', $font_size, '', true, 'UTF-8');
    $pdf->Cell(0, $margin_top, $fullname, 0, 1);

    $pdf->SetFont('dejavusans', 'B', $font_size, '', true, 'UTF-8');
    $pdf->Cell($margin_left, $margin_top, 'Адрес:', 0);

    $pdf->SetFont('dejavusans', '', $font_size, '', true, 'UTF-8');
    $pdf->Cell(0, $margin_top, $address['street'], 0, 1);

    $pdf->SetFont('dejavusans', 'B', $font_size, '', true, 'UTF-8');
    $pdf->Cell($margin_left, $margin_top, 'Город:', 0);

    $pdf->SetFont('dejavusans', '', $font_size, '', true, 'UTF-8');
    $pdf->Cell(0, $margin_top, $address['city'], 0, 1);

    $pdf->SetFont('dejavusans', 'B', $font_size, '', true, 'UTF-8');
    $pdf->Cell($margin_left, $margin_top, 'Страна:', 0);

    $pdf->SetFont('dejavusans', '', $font_size, '', true, 'UTF-8');
    $pdf->Cell(0, $margin_top, $address['country'], 0, 1);

    // Рисуем разделительную линию
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->SetLineWidth(0.1);
    // $pdf->Line(10, 120, 200, 120);

    // Добавляем информацию о товарах в заказе
    // Получаем все элементы заказа

    $items = $order->get_items();

    // Определяем столбцы таблицы
    $header = array('Продукт', 'Артикул', 'Цена', 'Количество', 'Итоговая стоимость');

    // Создаем пустую таблицу с указанными столбцами
    $data = array();
    $data[] = $header;
    

    // Заполняем таблицу данными
    foreach ($items as $item) {
        // Получаем информацию о товаре
        $product = $item->get_product();
        // Получаем URL изображения товара
        $image_url = wp_get_attachment_url($product->get_image_id());
        // $image = $pdf->Image($image_url, '', '', 50);

        // Получаем значения столбцов
        $product_name = $product->get_name();
        $product_sku = $product->get_sku();
        $product_price = $product->get_price();
        $quantity = $item->get_quantity();
        $total = $item->get_total();

        // Форматируем цену и итоговую стоимость в соответствии с настройками магазина
        // $product_price = wc_price($product_price);
        // $total = wc_price($total);

        // Создаем новую строку таблицы
        $row = array();
        // $row[] = $image;
        $row[] = $product_name;
        $row[] = $product_sku;
        $row[] = $product_price . ' руб.';
        $row[] = $quantity;
        $row[] = $total . ' руб.';

        // Добавляем строку в таблицу
        $data[] = $row;
    }

    // Добавляем подытог
    $data[] = array('', '', '', 'Подытог:', $order->get_subtotal() . ' руб.');

    // Добавляем стоимость доставки, если есть
    if ($order->get_shipping_total() > 0) {
        $data[] = array('', '', '', 'Доставка:', $order->get_shipping_total() . ' руб.');
    }

    // Добавляем общую стоимость заказа
    $data[] = array('', '', '', 'Итого:', $order->get_total() . ' руб.');

    // Создаем таблицу
    $pdf->SetFont('dejavusans', '', 6, '', true, 'UTF-8');
    $pdf->SetFillColor(245, 245, 245);
    $pdf->SetDrawColor(255, 255, 255);
    $pdf->SetTextColor(33, 47, 73);
    $pdf->SetLineWidth(0.1);

    foreach ($data as $row) {
        foreach ($row as $column) {
            $pdf->Cell(35, 7, $column, 1, 0, 'L', 1);
        }
        $pdf->Ln();
    }































    // // Добавляем информацию о доставке
    // $pdf->Ln(20);
    // $pdf->Cell(0, 10, 'Shipping Information', 0, 1);
    // $pdf->Cell(50, 10, 'Method:', 0);
    // $pdf->Cell(0, 10, $order->get_shipping_method(), 0, 1);
    // $pdf->Cell(50, 10, 'Address:', 0);
    // $pdf->Cell(0, 10, $order->get_shipping_address_1() . ' ' . $order->get_shipping_address_2(), 0, 1);
    // $pdf->Cell(50, 10, 'City:', 0);
    // $pdf->Cell(0, 10, $order->get_shipping_city(), 0, 1);
    // $pdf->Cell(50, 10, 'State:', 0);
    // $pdf->Cell(0, 10, $order->get_shipping_state(), 0, 1);
    // $pdf->Cell(50, 10, 'Zip Code:', 0);
    // $pdf->Cell(0, 10, $order->get_shipping_postcode(), 0, 1);
    // $pdf->Cell(50, 10, 'Country:', 0);
    // $pdf->Cell(0, 10, $order->get_shipping_country(), 0, 1);

    // // Добавляем общую стоимость заказа
    // $pdf->Ln(20);
    // $pdf->Cell(0, 10, 'Order Total', 0, 1);
    // $pdf->Cell(50, 10, 'Subtotal:', 0);
    // $pdf->Cell(0, 10, wc_price($order->get_subtotal()), 0, 1);
    // $pdf->Cell(50, 10, 'Shipping:', 0);
    // $pdf->Cell(0, 10, wc_price($order->get_shipping_total()), 0, 1);
    // $pdf->Cell(50, 10, 'Total:', 0);
    // $pdf->Cell(0, 10, wc_price($order->get_total()), 0, 1);

    // Выводим документ в браузер или сохраняем его в файл
    $pdf->Output('order_' . $order_id . '.pdf', 'I');
    exit;
}
