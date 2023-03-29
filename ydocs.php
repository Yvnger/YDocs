<?php

/**
 * Plugin Name: YDocs - генерация документов для заказов WooCommerce
 * Plugin URI: https://github.com/Yvnger/YDocs
 * Description: Плагин для магазина mir-chemodanov.ru, формирует и печатает документы для заказов. Генерирует счета, накладные и другие документы.
 * Version: 1.0
 * Author: YVNGER
 * Author URI: https://github.com/Yvnger
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

    include_once('templates/metabox-template.php');
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

require_once('functions.php');

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

    $address['country'] = $order->get_billing_country();
    $address['state'] = $order->get_billing_state();
    $address['city'] = $address['state'] . ', ' . $order->get_billing_city();
    $address['postcode'] = $order->get_billing_postcode();
    $address['street'] = $order->get_billing_address_1() . ' ' . $order->get_billing_address_2();
    $address['display'] = $address['postcode'] . ', ' . $address['state'] . ', ' . $address['city'] . ', ' . $address['street'];

    // Отправляем заголовки для указания типа контента
    header('Content-Type: text/html; charset=utf-8');

    $data = get_data();

    // Выводим сгенерированную страницу
    include_once('templates/order/order.php');

    // Останавливаем выполнение скрипта, чтобы не выводить другой контент
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

    // Отправляем заголовки для указания типа контента
    header('Content-Type: text/html; charset=utf-8');

    $data = get_data();

    // Выводим сгенерированную страницу
    include_once('templates/invoice/invoice.php');

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

    // Отправляем заголовки для указания типа контента
    header('Content-Type: text/html; charset=utf-8');

    $data = get_data();

    // Выводим сгенерированную страницу
    include_once('templates/bill/bill.php');

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

    $address['country'] = $order->get_billing_country();
    $address['state'] = $order->get_billing_state();
    $address['city'] = $address['state'] . ', ' . $order->get_billing_city();
    $address['postcode'] = $order->get_billing_postcode();
    $address['street'] = $order->get_billing_address_1() . ' ' . $order->get_billing_address_2();
    $address['display'] = $address['postcode'] . ', ' . $address['state'] . ', ' . $address['city'] . ', ' . $address['street'];

    // Отправляем заголовки для указания типа контента
    header('Content-Type: text/html; charset=utf-8');

    $data = get_data();

    // Выводим сгенерированную страницу
    include_once('templates/contract/contract.php');

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


    // Отправляем заголовки для указания типа контента
    header('Content-Type: text/html; charset=utf-8');

    $data = get_data();

    $items = $order->get_items();

    // Выводим сгенерированную страницу
    include_once('templates/waybill/waybill.php');

    // Останавливаем выполнение скрипта, чтобы не выводить другой контент
    exit;
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

    // Отправляем заголовки для указания типа контента
    header('Content-Type: text/html; charset=utf-8');

    $address['country'] = $order->get_billing_country();
    $address['state'] = $order->get_billing_state();
    $address['city'] = $address['state'] . ', ' . $order->get_billing_city();
    $address['postcode'] = $order->get_billing_postcode();
    $address['street'] = $order->get_billing_address_1() . ' ' . $order->get_billing_address_2();
    $address['display'] = $address['postcode'] . ', ' . $address['state'] . ', ' . $address['city'] . ', ' . $address['street'];

    $data = get_data();

    $items = $order->get_items();

    // Выводим сгенерированную страницу
    include_once('templates/transport-waybill/transport-waybill.php');

    // Останавливаем выполнение скрипта, чтобы не выводить другой контент
    exit;
}

