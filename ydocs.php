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
        echo '<a class="button" href="' . wp_nonce_url(admin_url('admin-ajax.php?action=print_order&order_id=' . $order_id), 'print_order_' . $order_id) . '" target="_blank">' . __('Распечатать заказ', 'ydocs') . '</a>';
    }
}

// Обработчик Ajax запроса для печати заказа
add_action('wp_ajax_print_order', 'print_order');
add_action('wp_ajax_nopriv_print_order', 'print_order');

function ydocs_box()
{
    add_meta_box(
        'ydocs-box',
        'Документы',
        'ydocs_box_content',
        'shop_order',
        'side',
        'default'
    );
}

function ydocs_box_content()
{
    $order_id = get_the_ID();

    echo '<p><a class="button" href="' . wp_nonce_url(admin_url('admin-ajax.php?action=print_invoice&order_id=' . $order_id), 'print_invoice_' . $order_id) . '" target="_blank">Счет-фактура</a></p>';
    echo '<p><a class="button" href="' . wp_nonce_url(admin_url('admin-ajax.php?action=print_bill&order_id=' . $order_id), 'print_bill_' . $order_id) . '" target="_blank">Счет</a></p>';
    echo '<p><a class="button" href="' . wp_nonce_url(admin_url('admin-ajax.php?action=print_contract&order_id=' . $order_id), 'print_contract_' . $order_id) . '" target="_blank">Договор</a></p>';
    echo '<p><a class="button" href="' . wp_nonce_url(admin_url('admin-ajax.php?action=print_waybill&order_id=' . $order_id), 'print_waybill_' . $order_id) . '" target="_blank">Накладная</a></p>';
    echo '<p><a class="button" href="' . wp_nonce_url(admin_url('admin-ajax.php?action=print_transport_waybill&order_id=' . $order_id), 'print_transport_waybill_' . $order_id) . '" target="_blank">Транспортная накладная</a></p>';
    echo '<p><a class="button" href="' . wp_nonce_url(admin_url('admin-ajax.php?action=print_order&order_id=' . $order_id), 'print_order_' . $order_id) . '" target="_blank">Заказ</a></p>';
}

add_action('add_meta_boxes_shop_order', 'ydocs_box');

// Обработчик Ajax запроса для печати счёта-фактуры
add_action('wp_ajax_print_invoice', 'print_invoice');
add_action('wp_ajax_nopriv_print_invoice', 'print_invoice');

// Обработчик Ajax запроса для печати счёта
add_action('wp_ajax_print_bill', 'print_bill');
add_action('wp_ajax_nopriv_print_bill', 'print_bill');

// Обработчик Ajax запроса для печати договора
add_action('wp_ajax_print_contract', 'print_contract');
add_action('wp_ajax_nopriv_print_contract', 'print_contract');

// Обработчик Ajax запроса для печати накладной
add_action('wp_ajax_print_waybill', 'print_waybill');
add_action('wp_ajax_nopriv_print_waybill', 'print_waybill');

// Обработчик Ajax запроса для печати транспортной накладной
add_action('wp_ajax_print_transport_waybill', 'print_transport_waybill');
add_action('wp_ajax_nopriv_print_transport_waybill', 'print_transport_waybill');


// Подключаем библиотеку TCPDF
require_once(plugin_dir_path(__FILE__) . 'tcpdf/tcpdf.php');

function print_order()
{
    // Проверяем, что пользователь имеет права на выполнение этой операции
    check_ajax_referer('print_order_' . $_REQUEST['order_id'], 'security');

    // Получаем данные о заказе
    $order_id = intval($_REQUEST['order_id']);
    $order = wc_get_order($order_id);
    if (!$order) {
        wp_die(__('Invalid order ID', 'ydocs'));
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

    $company = $order->get_billing_company();
    $payer = $order->get_meta('_payer');
    $consignee = $order->get_meta('_consignee');
    $vatin = $order->get_meta('_billing_vatin');

    $fullname = $order->get_billing_first_name() . ' ' . $order->get_billing_last_name();
    $phone = $order->get_billing_phone();
    $email = $order->get_billing_email();

    $address['country'] = $order->get_billing_country();
    $address['state'] = $order->get_billing_state();
    $address['city'] = $address['state'] . ', ' . $order->get_billing_city();
    $address['postcode'] = $order->get_billing_postcode();
    $address['street'] = $order->get_billing_address_1() . ' ' . $order->get_billing_address_2();
    $address['display'] = $address['postcode'] . ', ' . $address['state'] . ', ' . $address['city'] . ', ' . $address['street'];

    $numnum = get_post_meta($order_id, '_saphali_lite_invoice_no', true);

    $margin_top = 8;
    $margin_left = 50;
    $font_size = 6;
    $cellHeight = 10;

    $pdf->Ln(20);

    $pdf->SetFont('dejavusans', 'B', $font_size, '', true, 'UTF-8');

    $column1 = array("Компания", "Плательщик", "Грузополучатель", "ИНН/КПП плательщика");
    $column2 = array("ФИО", "Телефон", "Email", "Адрес", "Город");
    $column3 = array("Номер накладной", "Номер заказа", "Дата заказа", "Метод оплаты");

    $pdf->Cell(0, 10, 'Содержание заказа', 0, 1);
    $pdf->SetFont('dejavusans', 'B', $font_size, '', true, 'UTF-8');

    // Создаем таблицу с 3 колонками
    $pdf->setFillColor(255, 255, 255);
    $pdf->Cell(60, $cellHeight, 'Адрес доставки (Юр. лицо)', 0, 0, 'L', 1);
    $pdf->Cell(60, $cellHeight, 'Адрес доставки (Физ. лицо)', 0, 0, 'L', 1);
    $pdf->Cell(60, $cellHeight, '', 0, 1, 'L', 1);

    // Добавляем данные в таблицу
    $pdf->SetFont('dejavusans', '', 8);

    $pdf->MultiCell(60, $cellHeight, 'Компания: ' . $company, 0, 'L', false, 0);
    $pdf->Cell(60, $cellHeight, 'ФИО: ' . $fullname, 0, 0, 'L', 1);
    $pdf->Cell(60, $cellHeight, '№ накладной: ', 0, 1, 'L', 1);
    $pdf->MultiCell(60, $cellHeight, 'Плательщик: ' . $payer, 0, 'L', false, 0);
    $pdf->Cell(60, $cellHeight, 'Телефон: ' . $phone, 0, 0, 'L', 1);
    $pdf->Cell(60, $cellHeight, '№ заказа: ' . $order->get_id(), 0, 1, 'L', 1);
    $pdf->MultiCell(60, $cellHeight, 'Грузополучатель: ' . $consignee, 0, 'L', false, 0);
    $pdf->Cell(60, $cellHeight, 'E-mail: ' . $email, 0, 0, 'L', 1);
    $pdf->Cell(60, $cellHeight, 'Дата заказа: ' . $order->get_date_created()->format('d.m.Y, H:i'), 0, 1, 'L', 1);
    $pdf->Cell(60, $cellHeight, 'ИНН/КПП: ' . $vatin, 0, 0, 'L', 1);
    $pdf->Cell(60, $cellHeight, 'Страна: ' . $address['country'], 0, 0, 'L', 1);
    $pdf->MultiCell(60, $cellHeight, 'Метод оплаты: ' . $order->get_payment_method_title(), 0, 'L');
    $pdf->Cell(60, $cellHeight, '', 0, 0, 'L', 1);
    $pdf->MultiCell(60, $cellHeight, 'Адрес: ' . $address['display'], 0, 0);

    $pdf->Ln(10);

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

    $pdf->Output('order_' . $order_id . '.pdf', 'I');
    exit;
}

/**
 * Печать счёта-фактуры
 */
function print_invoice()
{
    // Проверяем, что пользователь имеет права на выполнение этой операции
    check_ajax_referer('print_invoice_' . $_REQUEST['order_id'], 'security');

    // Получаем данные о заказе
    $order_id = intval($_REQUEST['order_id']);
    $order = wc_get_order($order_id);
    if (!$order) {
        wp_die(__('Invalid order ID', 'ydocs'));
    }

    $address['country'] = $order->get_billing_country();
    $address['state'] = $order->get_billing_state();
    $address['city'] = $address['state'] . ', ' . $order->get_billing_city();
    $address['postcode'] = $order->get_billing_postcode();
    $address['street'] = $order->get_billing_address_1() . ' ' . $order->get_billing_address_2();
    $address['display'] = $address['postcode'] . ', ' . $address['state'] . ', ' . $address['city'] . ', ' . $address['street'];

    $items = $order->get_items();

    // Отправляем заголовки для указания типа контента
    header('Content-Type: text/html; charset=utf-8');

    // Выводим сгенерированную страницу
    include_once('templates/print_invoice.php');

    // Останавливаем выполнение скрипта, чтобы не выводить другой контент
    exit;
}

/**
 * Печать счёта
 */
function print_bill()
{
    // Проверяем, что пользователь имеет права на выполнение этой операции
    check_ajax_referer('print_bill_' . $_REQUEST['order_id'], 'security');


    // Получаем данные о заказе
    $order_id = intval($_REQUEST['order_id']);
    $order = wc_get_order($order_id);
    if (!$order) {
        wp_die(__('Invalid order ID', 'ydocs'));
    }

    $address['country'] = $order->get_billing_country();
    $address['state'] = $order->get_billing_state();
    $address['city'] = $address['state'] . ', ' . $order->get_billing_city();
    $address['postcode'] = $order->get_billing_postcode();
    $address['street'] = $order->get_billing_address_1() . ' ' . $order->get_billing_address_2();
    $address['display'] = $address['postcode'] . ', ' . $address['state'] . ', ' . $address['city'] . ', ' . $address['street'];

    $items = $order->get_items();

    // Отправляем заголовки для указания типа контента
    header('Content-Type: text/html; charset=utf-8');

    // Выводим сгенерированную страницу
    include_once('templates/print_bill.php');

    // Останавливаем выполнение скрипта, чтобы не выводить другой контент
    exit;
}

/**
 * Печать договора
 */
function print_contract()
{
    // Проверяем, что пользователь имеет права на выполнение этой операции
    check_ajax_referer('print_contract_' . $_REQUEST['order_id'], 'security');

    // Получаем данные о заказе
    $order_id = intval($_REQUEST['order_id']);
    $order = wc_get_order($order_id);
    if (!$order) {
        wp_die(__('Invalid order ID', 'ydocs'));
    }

    setlocale(LC_TIME, 'ru_RU.utf8'); // Устанавливаем локаль для русского языка
    $date = $order->get_date_created()->format('Y-m-d'); // Исходная дата в формате Y-m-d
    // Преобразуем дату в нужный формат
    $date_formatted = strftime('«%e» %B %Y г.', strtotime($date));

    // Приводим месяц к родительному падежу
    $months = [
        'января', 'февраля', 'марта', 'апреля',
        'мая', 'июня', 'июля', 'августа',
        'сентября', 'октября', 'ноября', 'декабря'
    ];
    $date_formatted = str_replace($months, array_map(function ($month) {
        return $month;
    }, $months), $date_formatted);

    $address['country'] = $order->get_billing_country();
    $address['state'] = $order->get_billing_state();
    $address['city'] = $address['state'] . ', ' . $order->get_billing_city();
    $address['postcode'] = $order->get_billing_postcode();
    $address['street'] = $order->get_billing_address_1() . ' ' . $order->get_billing_address_2();
    $address['display'] = $address['postcode'] . ', ' . $address['state'] . ', ' . $address['city'] . ', ' . $address['street'];

    $items = $order->get_items();

    // Отправляем заголовки для указания типа контента
    header('Content-Type: text/html; charset=utf-8');

    // Выводим сгенерированную страницу
    include_once('templates/print_contract.php');

    // Останавливаем выполнение скрипта, чтобы не выводить другой контент
    exit;
}

/**
 * Печать накладной
 */
function print_waybill()
{
    // Проверяем, что пользователь имеет права на выполнение этой операции
    check_ajax_referer('print_waybill_' . $_REQUEST['order_id'], 'security');

    // Получаем данные о заказе
    $order_id = intval($_REQUEST['order_id']);
    $order = wc_get_order($order_id);
    if (!$order) {
        wp_die(__('Invalid order ID', 'ydocs'));
    }

    echo 'Накладная';
}

/**
 * Печать транспортной накладной
 */
function print_transport_waybill()
{
    // Проверяем, что пользователь имеет права на выполнение этой операции
    check_ajax_referer('print_transport_waybill_' . $_REQUEST['order_id'], 'security');

    // Получаем данные о заказе
    $order_id = intval($_REQUEST['order_id']);
    $order = wc_get_order($order_id);
    if (!$order) {
        wp_die(__('Invalid order ID', 'ydocs'));
    }

    echo 'Транспортная накладная';
}
