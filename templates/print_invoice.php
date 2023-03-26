<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>СЧЕТ-ФАКТУРА № <?= $data['order_id'] ?></title>
    <style type="text/css">
        @page {
            margin-top: 0.5cm;
            margin-bottom: 2cm;
            margin-left: 0.5cm;
            margin-right: 0.5cm;
        }

        body {
            font-family: times;
            font-style: normal;
            font-weight: normal;
            margin: 0 auto;
            width: 1106px;
            padding: 0;
            font-size: 8pt;
            margin: 0;
        }

        p {
            margin: 0;
            padding: 0;
        }

        div.document {
            margin: 0 15px;
        }

        #prilozenie1,
        #prilozenie2,
        #prilozenie3 {
            width: 100%;
            font-size: 7pt;
            background-color: transparent;
            float: right;
            text-align: right;
        }

        #schetcom_number_date {
            width: 432px;
            font-weight: bold;
            font-size: 12pt;
            padding-left: 5px;
            background: none repeat scroll 0% 0% transparent;
        }

        #schetcom_change_date {
            width: 432px;
            font-weight: bold;
            font-size: 12pt;
            padding-left: 5px;
            background: none repeat scroll 0% 0% transparent;
        }

        #prodavec,
        #address_prod,
        #innkpp_prod,
        #gruzootpr,
        #gruzopol,
        #platezka,
        #pokupatel,
        #address_pokup,
        #innkpp_pokup {
            width: 480px;
            font-size: 8pt;
            padding-left: 2px;
            background: none repeat scroll 0% 0% transparent;
        }

        .top_table {
            text-align: right;
        }

        #valuta {
            width: 100%;
            font-size: 8pt;
            background: none repeat scroll 0% 0% transparent;
        }

        th.one_name_text {
            font-size: 8pt;
            font-weight: normal;
            width: 160px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
        }

        #name_txt {
            width: 160px;
        }

        th.two_ed_txt {
            font-size: 8pt;
            font-weight: normal;
            width: 113px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
        }

        #ed_txt {
            width: 125px;
            background-color: transparent;
        }

        th.three_kol_txt {
            font-size: 8pt;
            font-weight: normal;
            width: 60px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
        }

        #kol_txt {
            width: 60px;
        }

        th.for_item_price_txt {
            font-size: 8pt;
            font-weight: normal;
            width: 67px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
        }

        #item_price_txt {
            width: 64px;
            background-color: transparent;
        }

        th.five_price_txt {
            font-size: 8pt;
            font-weight: normal;
            width: 81px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
        }

        #price_txt {
            width: 84px;
            background-color: transparent;
        }

        th.six_akciz_txt {
            font-size: 8pt;
            font-weight: normal;
            width: 49px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
        }

        #akciz_txt {
            width: 56px;
            background-color: transparent;
        }

        th.seven_nds_txt {
            font-size: 8pt;
            font-weight: normal;
            width: 60px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
        }

        #nds_txt {
            width: 60px;
            background-color: transparent;
        }

        th.eight_nds_summ_txt {
            font-size: 8pt;
            font-weight: normal;
            width: 85px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
        }

        #nds_summ_txt {
            width: 81px;
            background-color: transparent;
        }

        th.nine_total_summ_txt {
            font-size: 8pt;
            font-weight: normal;
            width: 85px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
        }

        #total_summ_txt {
            width: 85px;
            background-color: transparent;
        }

        th.nine_total_summ_txt {
            font-size: 8pt;
            font-weight: normal;
            width: 85px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
        }

        #total_summ_txt {
            width: 85px;
            background-color: transparent;
        }

        th.ten_country_txt {
            font-size: 8pt;
            font-weight: normal;
            width: 150px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
        }

        #country_txt {
            width: 152px;
            background-color: transparent;
        }

        th.eleven_gtd_txt {
            font-size: 8pt;
            font-weight: normal;
            width: 167px;
            border: solid 1px black;
            border-bottom: none;
        }

        #gtd_txt {
            width: 167px;
            background-color: transparent;
        }

        th#ed_txt_1 {
            width: 44px;
            font-size: 8pt;
            font-weight: normal;
            background-color: transparent;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
        }

        th#ed_txt_2 {
            width: 90px;
            font-size: 8pt;
            font-weight: normal;
            background-color: transparent;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
        }

        th#country_txt_1 {
            width: 50px;
            font-size: 8pt;
            font-weight: normal;
            background-color: transparent;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
        }

        th#country_txt_2 {
            width: 100px;
            font-size: 8pt;
            font-weight: normal;
            background-color: transparent;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
        }

        #header th.one {
            font-size: 8pt;
            font-weight: normal;
            width: 160px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
            border-right: none;
            border-bottom: none;
        }

        #name_id {
            width: 144px;
            background-color: transparent;
        }

        #header th.two {
            font-size: 8pt;
            font-weight: normal;
            width: 44px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
            border-right: none;
            border-bottom: none;
        }

        #ed_id {
            width: 44px;
            background-color: transparent;
        }

        #header th.three {
            font-size: 8pt;
            font-weight: normal;
            width: 44px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
            border-right: none;
            border-bottom: none;
        }

        #ed_id2 {
            width: 80px;
            background-color: transparent;
        }

        #header th.for {
            font-size: 8pt;
            font-weight: normal;
            width: 60px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
            border-right: none;
            border-bottom: none;
        }

        #kol_id {
            width: 60px;
            background-color: transparent;
        }

        #header th.five {
            font-size: 8pt;
            font-weight: normal;
            width: 67px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
            border-right: none;
            border-bottom: none;
        }

        #item_price_id {
            width: 64px;
            background-color: transparent;
        }

        #header th.six {
            font-size: 8pt;
            font-weight: normal;
            width: 81px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
            border-right: none;
            border-bottom: none;
        }

        #price_id {
            width: 81px;
            background-color: transparent;
        }

        #header th.seven {
            font-size: 8pt;
            font-weight: normal;
            width: 54px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
            border-right: none;
            border-bottom: none;
        }

        #akciz_id {
            width: 50px;
            background-color: transparent;
        }

        #header th.eight {
            font-size: 8pt;
            font-weight: normal;
            width: 60px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
            border-right: none;
            border-bottom: none;
        }

        #nds_id {
            width: 60px;
            background-color: transparent;
        }

        #header th.nine {
            font-size: 8pt;
            font-weight: normal;
            width: 71px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
            border-right: none;
            border-bottom: none;
        }

        #nds_summ_id {
            width: 74px;
            background-color: transparent;
        }

        #header th.ten {
            font-size: 8pt;
            font-weight: normal;
            width: 80px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
            border-right: none;
            border-bottom: none;
        }

        #total_summ_id {
            width: 80px;
            background-color: transparent;
        }

        #header th.eleven {
            font-size: 8pt;
            font-weight: normal;
            width: 50px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
            border-right: none;
            border-bottom: none;
        }

        #country_id {
            width: 50px;
            background-color: transparent;
        }

        #header th.twelve {
            font-size: 8pt;
            font-weight: normal;
            width: 100px;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
            border-right: none;
            border-bottom: none;
        }

        #country_id2 {
            width: 100px;
            background-color: transparent;
        }

        #header th.thirteen {
            font-size: 8pt;
            font-weight: normal;
            width: 166px;
            border: solid 1px black;
            border-bottom: none
        }

        #gtd_id {
            width: 166px;
            background-color: transparent;
        }

        tr#item td.normal {
            font-size: 8pt;
            font-weight: normal;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
            text-align: right;
            padding: 0 2px 0 0;
        }

        tr#item td.left {
            font-size: 8pt;
            font-weight: normal;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
            text-align: left;
            padding: 0 0 0 1px;
        }

        tr#item td.center {
            font-size: 8pt;
            font-weight: normal;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
            text-align: center;
        }

        tr#item td.last {
            font-size: 8pt;
            font-weight: normal;
            border: solid 1px black;
        }

        tr#item td.right,
        tr#item td.invoice_com_item_summ,
        tr#item td.item_summ_wo_nds {
            font-size: 8pt;
            font-weight: normal;
            text-align: right;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
            padding: 0 2px 0 0;
        }

        #items td.two {
            font-size: 8pt;
            font-weight: normal;
            border: solid 1px black;
            border-right: none;
            text-align: right;
            padding: 0 2px 0 0;
        }

        #end_str td.two {
            border-bottom: solid 1px black;
        }

        #items tr#item td.last,
        #items tr#item td.two {
            border-bottom: none;
        }

        tr#end_str td.summ {
            border: solid 1px black;
            border-right: none;
            font-weight: bold;
            font-size: 8pt;
        }

        tr#end_str td.x {
            font-size: 8pt;
            font-weight: normal;
            text-align: center;
            border: solid 1px black;
            border-right: none;
        }

        tr#end_str td#invoice_total_summ {
            font-weight: normal;
            font-size: 8pt;
            text-align: right;
            border: solid 1px black;
            border-right: none;
            padding: 0 2px 0 0;
        }

        tr#end_str td.last {
            font-size: 8pt;
            font-weight: normal;
            border: solid 1px black;
            border-right: none;
            border-bottom: none;
        }

        table.first {
            padding: 0px;
        }

        table.table_end {
            margin-top: 20px;
        }

        .table_end #owner,
        .table_end #ip,
        .table_end #buhgalter {
            font-size: 8pt;
        }

        #owner span {
            padding: 0 0px 0 0;
            display: inline-block;
        }

        #owner span.fio,
        #ip span.fio,
        #buhgalter span.fio {
            padding: 0;
        }

        #ip span {
            padding: 0 0 0 0;
        }

        #ip span.fio {
            padding: 0;
        }

        #owner_mile,
        #ip_mile {
            font-size: 7pt;
            text-align: left;
            background-color: transparent;
            padding: 0 0 0 0;
            display: block;
        }

        #owner span {
            padding: 0 0px 0 0;
        }

        td.first_col {
            width: 520px;
        }

        .table_end #buhgalter_mile {
            font-size: 7pt;
            text-align: left;
            padding: 0 0 0 0;
        }

        hr#ogrn_mile {
            font-size: 7pt;
            width: 360px;
            text-align: left;
            background-color: transparent;
        }

        hr#ogrn {
            background: black;
            border: none;
            height: 1px;
            margin: 12px 0 0;
            padding: 0;
            color: black;
        }

        div#prim {
            font-size: 7pt;
            background-color: transparent;
        }

        /**/
        dl.variation {
            display: inline;
            font-size: 12px;
            font-style: italic;
            padding: 0;
        }

        dl.variation dt,
        dl.variation dd {
            display: inline;
        }

        dl.variation dd {
            margin-left: 7px;
            padding-left: 0;
        }

        dl.variation dd:last-child:after {
            content: "";
        }

        dl.variation dd:after {
            content: ", ";
        }

        dl.variation dt {
            padding: 0 0 0 10px;
        }

        p#printPreview {
            padding: 18px;
            text-align: center;
        }

        #printPreview a {
            color: #106E99;
            text-decoration: none;
        }
    </style>

</head>

<body>

    <div class="document">
        <table class="first" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td>
                        <div class="bottom_first_tablecff">
                            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                    <tr>
                                        <td class="top_table" width="538" align="left">
                                            <div class="editable" id="schetcom_number_date">
                                                <table class="head_title" cellspacing="0" cellpadding="0" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td>Счет-фактура № </td>
                                                            <td class="underline"><span>&nbsp;&nbsp;&nbsp;&nbsp;<?= $data['order_id'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
                                                            <td>&nbsp;от&nbsp;</td>
                                                            <td class="underline"><span>&nbsp;
                                                                <?= $data['date']['day'] . '.' . $data['date']['month_num'] . '.' . $data['date']['year'] ?> г.&nbsp;&nbsp;&nbsp;&nbsp;</span> </td>
                                                            <td><span class="number_documet_line">&nbsp;</span> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--<div class="editable" id="schetcom_change_date">Исправление № _________________ от _____________  <span class="number_documet_line"></span> </div>-->
                                        </td>
                                        <td class="top_table" width="538" align="right">
                                            <div id="prilozenie1">Приложение №1</div>
                                            <div id="prilozenie2">к постановлению Правительства Российской Федерации от 26 декабря 2011 г. № 1137</div>
                                            <div id="prilozenie3">(в редакции постановления Правительства Российской Федерации от 25 мая 2017 г. № 625)</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="sf-data" width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                    <tr>
                                        <td class="editable first"><strong>Продавец:</strong> </td>
                                        <td>
                                            <div class="editable" id="prodavec">ИП Телятников Юрий Михайлович</div> <span class="number_documet_line"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="editable first">Адрес: </td>
                                        <td>
                                            <div class="editable" id="address_prod">109000, Россия, г. Москва, Батюнинский проезд, д.6</div> <span class="number_documet_line"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="editable first">ИНН/КПП продавца: </td>
                                        <td>
                                            <div class="editable" id="innkpp_prod">312323052438 /</div> <span class="number_documet_line"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="editable first">Грузоотправитель и его адрес: </td>
                                        <td>
                                            <div class="editable" id="gruzootpr">Он же</div> <span class="number_documet_line"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="editable first">Грузополучатель и его адрес: </td>
                                        <td>
                                            <div class="editable" id="gruzopol"><?= $order->get_meta('_consignee') ?> </div> <span class="number_documet_line"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="editable first">К платежно-расчетному документу №</td>
                                        <td>
                                            <div class="editable" id="platezka">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div> <span class="number_documet_line"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="editable first"><strong>Покупатель:</strong> </td>
                                        <td>
                                            <div class="editable" id="pokupatel"><?= $order->get_meta('_billing_company') ?></div> <span class="number_documet_line"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="editable first"> Адрес: </td>
                                        <td>
                                            <div class="editable" id="address_pokup"><?= $address['display'] ?></div> <span class="number_documet_line"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="editable first">ИНН/КПП покупателя: </td>
                                        <td>
                                            <div class="editable" id="innkpp_pokup"><?= $order->get_meta('_billing_vatin') ?></div> <span class="number_documet_line"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="editable first">Валюта: наименование, код </td>
                                        <td>
                                            <div class="editable" id="valuta">Российский рубль, 643</div> <span class="number_documet_line"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="editable first">Идентификатор государственного контракта, договора (соглашения): </td>
                                        <td>
                                            <div class="editable" id="valuta"> &nbsp; <br><br> </div> <span class="number_documet_line"></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                        <table class="invoice_com_items" id="items" width="100%" cellspacing="0" cellpadding="0" border="0">
                            <thead>
                                <tr>
                                    <th rowspan="2" class="one_name_text">
                                        <div class="editable_sys" id="name_txt">Наименование товара (описание выполненных работ, оказанных услуг), имущественного права</div>
                                    </th>
                                    <th colspan="2" class="two_ed_txt">
                                        <div class="editable_sys" id="ed_txt">Единица<br>измерения</div>
                                    </th>
                                    <th rowspan="2" class="three_kol_txt">
                                        <div class="editable_sys" id="kol_txt">Коли-<br>чество</div>
                                    </th>
                                    <th rowspan="2" class="for_item_price_txt">
                                        <div class="editable_sys" id="item_price_txt">Цена<br> (тариф) за<br> единицу<br> измерения</div>
                                    </th>
                                    <th rowspan="2" class="five_price_txt">
                                        <div class="editable_sys" id="price_txt">Стоимость товаров (работ, услуг), имущественных прав без налога - всего</div>
                                    </th>
                                    <th rowspan="2" class="six_akciz_txt">
                                        <div class="editable_sys" id="akciz_txt">В том числе акциз</div>
                                    </th>
                                    <th rowspan="2" class="seven_nds_txt">
                                        <div class="editable_sys" id="nds_txt">Налоговая ставка</div>
                                    </th>
                                    <th rowspan="2" class="eight_nds_summ_txt">
                                        <div class="editable_sys" id="nds_summ_txt">Сумма налога,<br>предъявляемая <br> покупателю</div>
                                    </th>
                                    <th rowspan="2" class="nine_total_summ_txt">
                                        <div class="editable_sys" id="total_summ_txt">Стоимость товаров (работ, услуг), имущественных прав с налогом - всего</div>
                                    </th>
                                    <th colspan="2" class="ten_country_txt">
                                        <div class="editable_sys" id="country_txt">Страна происхождения товара</div>
                                    </th>
                                    <th rowspan="2" class="eleven_gtd_txt">
                                        <div class="editable_sys" id="gtd_txt">Номер<br>таможенной<br>декларации</div>
                                    </th>
                                </tr>
                                <tr>
                                    <th class="editable_sys" id="ed_txt_1" width="2mm">код</th>
                                    <th class="editable_sys" id="ed_txt_2">условное обозначение (национальное)</th>
                                    <th class="editable_sys" id="country_txt_1">цифровой <br>код</th>
                                    <th class="editable_sys" id="country_txt_2">краткое<br>наименование</th>
                                </tr>

                            </thead>
                            <thead>
                                <tr id="header">
                                    <th class="one">
                                        <div class="editable_sys" id="name_id">1</div>
                                    </th>
                                    <th class="two">
                                        <div class="editable_sys" id="ed_id">2</div>
                                    </th>
                                    <th class="three">
                                        <div class="editable_sys" id="ed_id2">2а</div>
                                    </th>
                                    <th class="for">
                                        <div class="editable_sys" id="kol_id">3</div>
                                    </th>
                                    <th class="five">
                                        <div class="editable_sys" id="item_price_id">4</div>
                                    </th>
                                    <th class="six">
                                        <div class="editable_sys" id="price_id">5</div>
                                    </th>
                                    <th class="seven">
                                        <div class="editable_sys" id="akciz_id">6</div>
                                    </th>
                                    <th class="eight">
                                        <div class="editable_sys" id="nds_id">7</div>
                                    </th>
                                    <th class="nine">
                                        <div class="editable_sys" id="nds_summ_id">8</div>
                                    </th>
                                    <th class="ten">
                                        <div class="editable_sys" id="total_summ_id">9</div>
                                    </th>
                                    <th class="eleven">
                                        <div class="editable_sys" id="country_id">10</div>
                                    </th>
                                    <th class="twelve">
                                        <div class="editable_sys" id="country_id2">10а</div>
                                    </th>
                                    <th class="thirteen">
                                        <div class="editable_sys" id="gtd_id">11</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($data['items'] as $item) : ?>

                                    <tr id="item">
                                        <td class="item normal left">
                                            <?= $item['name'] ?>
                                        </td>
                                        <td class="item center">796</td>
                                        <td class="item center">шт</td>
                                        <td class="item normal">
                                            <?= $item['quantity'] ?>
                                        </td>
                                        <td class="item normal">
                                            <?= $item['price']['float'] ?>
                                        </td>
                                        <td class="item_summ_wo_nds">
                                            <?= $item['total']['float'] ?>
                                        </td>
                                        <td class="item normal center">--</td>
                                        <td class="item center">Без НДС</td>
                                        <td class="item right">--</td>
                                        <td class="invoice_com_item_summ">
                                            <?= $item['total']['float'] ?>
                                        </td>
                                        <td class="item two">&nbsp;</td>
                                        <td class="item two">&nbsp;</td>
                                        <td class="item last">&nbsp;</td>
                                    </tr>

                                <?php endforeach; ?>

                                <tr id="end_str">
                                    <td colspan="5" class="summ" valign="center">
                                        <div class="editable_sys" id="items_summ_txt">Всего к оплате:</div>
                                    </td>
                                    <td class="item two"><?= $data['subtotal']['float'] ?></td>
                                    <td colspan="2" class="x">
                                        X
                                    </td>
                                    <td class="item two">0,00</td>
                                    <td id="invoice_total_summ"><?= $data['total']['float'] ?></td>
                                    <td colspan="3" class="last">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table_end" width="100%">
                            <tbody>
                                <tr>
                                    <td class="first_col" valign="top">
                                        <div class="editable_sys" id="owner"><span>Руководитель организации</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;______________________ <span class="fio">Телятников Юрий Михайлович </span></div>
                                        <div class="editable_sys" id="owner_mile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;подпись</div>
                                        <br>
                                        <div class="editable_sys" id="ip"><span>Индивидуальный предприниматель</span> &nbsp;&nbsp;&nbsp;&nbsp;______________________ <span class="fio">ИП Телятников Юрий Михайлович</span></div>
                                        <div class="editable_sys" id="ip_mile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;подпись</div>
                                    </td>
                                    <td valign="top">
                                        <div class="editable_sys" id="buhgalter"><span>Главный бухгалтер</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ______________________ <span class="fio">(Фамилия И.О.)</span></div>
                                        <div class="editable_sys" id="buhgalter_mile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;подпись&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                        <br>
                                        <hr class="editable_sys" id="ogrn">
                                        <div class="editable_sys" id="ogrn_mile">(реквизиты свидетельства о государственной регистрации индивидуального предпринимателя)</div>
                                        <br>
                                        <br>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="editable_sys" id="prim">ПРИМЕЧАНИЕ. Первый экземпляр - покупателю, второй экземпляр - продавцу</div>
                        <br>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>