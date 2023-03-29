<?php
require_once 'vendor/autoload.php';
use NumberToWords\NumberToWords;
setlocale(LC_TIME, 'ru_RU.utf8'); // Устанавливаем локаль для русского языка

function getNoun($number, $one, $two, $five) {
    if ($number == 1) {
        return $one;
    }
    $number = abs($number) % 100;
    $remainder = $number % 10;
    if ($number > 10 && $number < 20) {
        return $five;
    } elseif ($remainder > 1 && $remainder < 5) {
        return $two;
    } else {
        return $five;
    }
}

function numberToWord($num)
{
    $arr_1 = array('', 'один', 'два', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять');
    $arr_2 = array('', 'десять', 'двадцать', 'тридцать', 'сорок', 'пятьдесят', 'шестьдесят', 'семьдесят', 'восемьдесят', 'девяносто');
    $arr_3 = array('', 'сто', 'двести', 'триста', 'четыреста', 'пятьсот', 'шестьсот', 'семьсот', 'восемьсот', 'девятьсот');
    $arr_4 = array('', 'одна', 'две', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять');
    
    if ($num < 10) {
        return $arr_1[$num];
    } elseif ($num < 20) {
        $suffix = ($num === 11) ? 'надцать' : 'надцати';
        return $arr_1[$num % 10] . $suffix;
    } elseif ($num < 100) {
        return $arr_2[floor($num / 10)] . ' ' . $arr_1[$num % 10];
    } elseif ($num < 1000) {
        $rem = $num % 100;
        $suffix = ($rem < 10 || $rem > 20) ? $arr_4[$rem % 10] : '';
        return $arr_3[floor($num / 100)] . ' ' . $arr_2[floor(($num % 100) / 10)] . ' ' . $suffix;
    } else {
        return 'Число слишком большое';
    }
}

function get_data() {
    $order_id = $_REQUEST['order_id'];   
    $order = wc_get_order($order_id);

    $date = $order->get_date_created()->format('Y-m-d'); // Исходная дата в формате Y-m-d
    // Преобразуем дату в нужный формат
    $month = strftime('%B', strtotime($date));

    // Приводим месяц к родительному падежу
    $months = [
        'января', 'февраля', 'марта', 'апреля',
        'мая', 'июня', 'июля', 'августа',
        'сентября', 'октября', 'ноября', 'декабря'
    ];
    
    $month = str_replace($months, array_map(function ($month) {
        return $month;
    }, $months), $month);

    $data['order_id'] = $order_id;
    $data['date']['day'] = $order->get_date_created()->format('d');
    $data['date']['month_num'] = $order->get_date_created()->format('m');
    $data['date']['month_name'] = $month;
    $data['date']['year'] = $order->get_date_created()->format('Y');
    $data['items'] = array();

    $items = $order->get_items();

    $i = 0;
    $total_quantity = 0;

    foreach ($items as $item) :
        $i++;
        $total_quantity += $item->get_quantity();

        $product = $item->get_product();
        $itemData['count_num'] = $i;
        $itemData['name'] = $item->get_name();
        $itemData['sku'] = $product->get_sku();
        $itemData['quantity'] = $item->get_quantity();
        $itemData['price']['withCurrency'] = wc_price($product->get_price());
        $itemData['price']['int'] = wc_format_decimal($product->get_price(), 0);
        $itemData['price']['float'] = wc_format_decimal($product->get_price(), 2);
        $itemData['total']['withCurrency'] = wc_price($item->get_total());
        $itemData['total']['int'] = wc_format_decimal($item->get_total(), 0);
        $itemData['total']['float'] = wc_format_decimal($item->get_total(), 2);
        $data['items'][] = $itemData;
    endforeach;

    $noun = getNoun($total_quantity, 'порядковый номер записи', 'порядковых номера записей', 'порядковых номеров записей');

    $data['quantity']['int'] = $total_quantity;
    $data['quantity']['waybill'] = numberToWord($total_quantity) . ' ' . $noun;

    $data['subtotal']['withCurrency'] = wc_price($order->get_subtotal());
    $data['subtotal']['int'] = wc_format_decimal($order->get_subtotal(), 0);
    $data['subtotal']['float'] = wc_format_decimal($order->get_subtotal(), 2);

    $data['total']['withCurrency'] = wc_price($order->get_total());
    $data['total']['int'] = wc_format_decimal($order->get_total(), 0);
    $data['total']['float'] = wc_format_decimal($order->get_total(), 2);
    $data['total']['string'] = NumberToWords::transformCurrency('ru', str_replace('.', '', wc_format_decimal($order->get_total(), 2)), 'RUB');

    return $data;
}
