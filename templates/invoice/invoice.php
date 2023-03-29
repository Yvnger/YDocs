<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="<?= plugins_url( 'invoice.style.css', __FILE__ ); ?>">
    <title>СЧЕТ-ФАКТУРА № <?= $data['order_id'] ?></title>
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

    <script>
        // Wait for the new page to load
        window.addEventListener('load', function() {
            // Print the page
            window.print();
        }, false);
    </script>
</body>

</html>