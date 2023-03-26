<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 plus MathML 2.0//EN" "//www.w3.org/Math/DTD/mathml2/xhtml-math11-f.dtd">
<html xmlns="//www.w3.org/1999/xhtml">

<head profile="//dublincore.org/documents/dcmi-terms/">
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
    <title>Договор № <?= $data['order_id'] ?></title>
    <style type="text/css">
        body {
            font-size: 13px;
            font-family: Calibri;
        }

        p.head {
            text-align: center;
            font-size: 15px;
        }

        .products td {
            border-color: black;
        }

        p.abz {
            padding: 0;
            margin: 0;
        }

        .abz_mp {
            text-align: center;
            padding: 0;
            margin: 0px 0 -3px 0;
        }

        .span_podp {
            text-align: center;
            display: inline-block;
        }

        p.pechatka {
            text-align: center;
            clear: both;
            padding: 0;
            margin: 0;
        }

        p.center {
            text-align: center;
        }

        .right {
            float: right;
            text-align: right;
            padding: 0;
            margin: 0;
        }

        .left_f {
            text-align: left;
            padding: 0;
            margin: 0 0 -16px 0;
        }

        .clear {
            clear: both;
        }

        p {
            margin: 0;
            padding: 0;
        }

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

        table p {
            margin: 0;
            padding: 0 0 5px;
        }

        div table td {
            border-style: solid;
            border-width: 1px 1px 0 0;
            padding: 0 5px 0;
            text-align: center;
        }

        div table {
            border-style: solid;
            border-width: 0 0 1px 1px;
        }

        table td {
            max-width: 191mm;
        }
    </style>
</head>

<body>

    <div style="width: 191mm; margin-left: 5mm;">
        <p class="head"><strong>Договор № <?= $data['order_id'] ?><br />
            </strong></p>
        <p>&nbsp;</p>
        <p class="left_f">г. Москва</p>
        <p class="right">от «<?= $data['date']['day'] ?>» <?= $data['date']['month_name'] . ' ' . $data['date']['year'] ?></p>
        <div class="clear"></div>
        <p>&nbsp;</p>
        <p>ИП Телятников Ю.М., именуемый в дальнейшем "Поставщик", в лице руководителя Телятникова Юрия Михайловича, действующего на основании Свидетельства, с одной стороны, и ИП Семенова А.О. в лице руководителя Семеновой Алеси Олеговны, действующего на основании Свидетельства, именуемое далее "Покупатель", заключили настоящий Договор.</p>
        <p>&nbsp;</p>
        <p><strong>1. Предмет договора</strong><br />
            1.1. По настоящему Договору Поставщик продает, а Покупатель покупает чемоданы, дорожные сумки, саквояжи, рюкзаки, хозяйственные сумки-тележки, именуемые в дальнейшем Товар, в количестве, качестве, ассортименте в соответствии с накладными и прочими отгрузочными и расчетными документами и оплачивает его в порядке и согласованные сторонами сроки.</p>
        <p>&nbsp;</p>
        <table style="width: 185mm; margin-top: 0" border="1" cellspacing=0 cellpadding=2 class="products">
            <tr style="background-color: #B0B0B0; border-color: black; text-align: center;  font-weight: bold;">
                <td style="width: 7mm;">№</td>
                <td style="width: 70mm;">Название</td>
                <td style="width: 8mm;">Ед.</td>
                <td style="width: 15mm;">Количество</td>
                <td style="width: 22mm;">Цена за ед., &nbsp;руб.</td>
                <td style="width: 37mm;">Сумма без НДС, &nbsp;руб.</td>
            </tr>

            <?php foreach ($data['items'] as $item) : ?>
                <tr style="border-color: black;">
                    <td><?= $item['count_num'] ?></td>
                    <td><?= $item['name'] ?></td>
                    <td>шт</td>
                    <td style="text-align: right;"><?= $item['quantity'] ?></td>
                    <td style="text-align: right;"><?= $item['price']['int'] ?></td>
                    <td style="text-align: right;"><?= $item['total']['int'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <p>&nbsp;</p>
        <p><strong>2. Цена товара</strong></p>
        <p>2.1. Цена товара договорная, включает в себя налог на добавленную стоимость. Цена товара указывается в товарных накладных и прочих отгрузочных и расчетных документах.</p>
        <p>&nbsp;</p>
        <p><strong>3. Порядок отгрузки и приемки товара</strong><br />
            3.1. Поставщик обязуется поставить Товар отдельными партиями в течение 5 (Пяти) дней с момента Заявки Покупателя.<br />
            3.2. Поставка Товара осуществляется путем его Отгрузки и доставки автомобильным, железнодорожным или авиационным транспортом по согласованию сторон на склад Покупателя. Транспортные расходы несет Покупатель (самовывоз со склада Поставщика).<br />
            3.3. Товар должен быть затарен (упакован) надлежащим образом, обеспечивающим его сохранность при перевозке и хранении в соответствии с требованиями ГОСТ, ТУ.<br />
            3.4. На тару (упаковку) Товара должна быть нанесена маркировка в соответствии с требованиями законодательства РФ.<br />
            3.5. Покупатель (получатель) обязан совершить все необходимые действия, обеспечивающие принятие Товара.<br />
            3.6. Приемка Товара по количеству, ассортименту, качеству, комплектности и таре (упаковке) производится при его вручении Покупателю (получателю) в соответствии с инструкциями о порядке приемки продукции производственно-технического назначения и товаров народного потребления по количеству и качеству, утвержденными Постановлениями Госарбитража СССР от 25.04.1966 N П-7 и от 15.06.1965 N П-6 - с условиями Договора, Спецификации и товарной накладной. Если при приемке будет обнаружено несоответствие Товара указанным условиям, Покупатель в течении 3 (Трех дней) информирует об этом Поставщика. В течение 5 (Пяти) дней после получения претензии Поставщик обязуется за свой счет, по согласованию с Покупателем заменить, допоставить и т.д. (по выбору Покупателя) Товар.<br />
            3.7. Право собственности на товар переходит к Покупателю с момента подписания Покупателем товарно-транспортной накладной.<br />
            3.8. Обязанности Поставщика по поставке товара считаются исполненными с момента передачи товара представителю Покупателя.</p>
        <p>&nbsp;</p>
        <p><strong>4. Порядок расчетов</strong><br />
            4.1. Стоимость товара указана в счет - фактуре (и товарной накладной) Поставщика.<br />
            4.2. Оплата за товар производится по следующей схеме: 30% (Тридцать процентов) от суммы накладной оплачивается в течении 2-х (Двух) дней - предоплата; 70% (Семьдесят процентов) оплачивается в срок не превышающий 45 (Сорок пять) дней с момента отгрузки товара, по мере его реализации, частями, но не реже одного раза в неделю.<br />
            4.3. Оплата товара может быть произведена Покупателем любым не противоречащим законодательству способом.<br />
            4.4. Поставщик оставляет за Покупателем право на возврат нереализованного товара.</p>
        <p>&nbsp;</p>
        <p><strong>5. Ответственность сторон</strong><br />
            5.1. Уплата неустойки и возмещение убытков, причиненных ненадлежащим исполнением обязательств, не освобождает стороны от исполнения обязательств по настоящему Договору и не влечет за собой расторжение Договора.<br />
            5.2. В случае обнаружения скрытых недостатков в товаре после его приемки, Покупатель должен немедленно информировать об этом Продавца. Бракованный товар подлежит обмену или уценке по согласованию с ним.<br />
            5.3. Покупатель после получения товара от Продавца несет за него полную материальную ответственность.<br />
            5.4. За нарушение условий настоящего Договора стороны несут ответственность в порядке, предусмотренном законом. Возмещению подлежит прямой действительный ущерб, упущенная выгода не возмещается. Бремя доказывания убытков лежит на потерпевшей стороне.</p>
        <p>&nbsp;</p>
        <p><strong>6. Особые условия</strong><br />
            6.1. За неисполнение, либо ненадлежащее исполнение обязательств по настоящему договору помимо ответственности предусмотренной в п.5 настоящего договора, Стороны вправе уведомить об одностороннем отказе от исполнения договора полностью или частично.<br />
            6.2. Почтовые адреса Продавца и Покупателя (стороны по настоящему договору) должны указываться при заключении настоящего Договора. Обо всех изменениях почтового адреса сторона, изменившая адрес, должна без промедления сообщить другой стороне в письменной форме. Если любая из сторон не сообщит иное, юридический адрес, указанный в учредительных документах, будет считаться почтовым адресом.</p>
        <p>&nbsp;</p>
        <p><strong>7. Разрешение споров и применимое право</strong><br />
            7.1. Все споры по настоящему Договору решаются путем переговоров.<br />
            7.2. При не достижении согласия споры решаются в Арбитражном суде города Москвы в соответствии с действующим законодательством РФ.</p>
        <p>&nbsp;</p>
        <p><strong>8. Срок действия договора</strong><br />
            8.1. Настоящий договор вступает в силу с момента подписания его сторонами и действует до «31» декабря 2017 года. Действие договора считается продленным на тех же условиях на неопределённый срок, если за 5 дней до окончания срока его действия, ни одна из сторон не направила предупреждение о его прекращении.<br />
            8.2. Расторжение договора возможно по соглашению сторон, а также в одностороннем порядке, в случае нарушения одной из сторон обязательств, предусмотренных настоящим договором. Расторжение договора не освобождает стороны от исполнения обязательств, возникших до момента расторжения договора, в том числе по взаиморасчетам и имущественной ответственности.<br />
            8.3. В случае расторжения договора Покупатель обязан возвратить товар Поставщику в течении 15-ти календарных дней с момента расторжения договора за свой счет.<br />
            8.4. В случае расторжения договора Стороны обязаны завершить взаиморасчеты в течение 15-ти календарных дней с момента расторжения договора.</p>
        <p>&nbsp;</p>
        <p><strong>9. Заключительное положение</strong><br />
            9.1. Настоящий Договор составлен в двух экземплярах, имеющих одинаковую юридическую силу, по одному экземпляру для каждой из сторон.</p>
        <p>9.1. Настоящий Договор составлен в двух экземплярах, имеющих одинаковую юридическую силу, по одному экземпляру для каждой из сторон.9.2. Любые дополнения и изменения действительны лишь в том случае, если они оформлены в письменной форме и подписаны обеими сторонами.</p>
        <p>&nbsp;</p>
        <p class="center"><strong>Юридические адреса и платежные реквизиты сторон</strong></p>
        <table class="rekv" border="0" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td valign="top" width="326">
                        <p align="center"><strong>Продавец:</strong></p>
                    </td>
                    <td valign="top" width="313">
                        <p align="center"><strong>Покупатель:</strong></p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left;" valign="top" width="326">
                        <p class="abz">ИП Телятников Юрий Михайлович<br />
                            308000, Россия, Белгородская область, г.Белгород, ул.Есенина д.46А кв.260</p>
                        <p class="abz">ИНН 312323052438</p>
                        <p class="abz">р/с 40802810002180000543</p>
                        <p class="abz">в ПАО «БАНК УРАЛСИБ» г.Москва,</p>
                        <p class="abz">к/с 30101810100000000787,</p>
                        <p class="abz">БИК 044525787,</p>
                        <p class="abz">ОГРНИП 316312300051769</p>
                    </td>
                    <td style="text-align: left;" valign="top" width="313">
                        <p class="abz">[customer_info]</p>
                        <p class="abz">
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="border: none; width: 100%;" border="0" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td style="border: none; text-align: left;" valign="top">&nbsp;</p>
                        <p><strong>От имени продавца:</strong></p>
                        <p><span class="span_podp">____________________ <strong>Ю.М. Телятников</strong></span></p>
                        <p><strong><span class="span_podp">м.п.</span></strong>
                    </td>
                    <td style="border: none; text-align: left;" valign="top">&nbsp;</p>
                        <p><strong>От имени продавца:</strong></p>
                        <p><span class="span_podp">____________________ </span></p>
                        <p><strong><span class="span_podp">м.п.</span></strong>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        (function() {
            var js = "window['__CF$cv$params']={r:'7ad62cc41fc737d7',m:'95oQAPBhxajG.NJVm0PXj8Yl9MeKEZetnD8G7mk4s2w-1679737042-0-AfciKzP0Pu16Yje5L3kUv/YN7Pr9rvEmSwqvlQ4J///ftTEWkuEL+Obu4AVWtZy23w/9dzRQR7t0kON5VAvnbpqI9KLMCji8ADlBD+TWKkJWWeYv4liLffe8Hw8OnD2mRQqYC2KETpEEMUEZKGPoylzwO0Gn2PQSLqJiaXWli6HH7Km439JVrK7gAMFn6kIn5G7iig7Gxy6P2G9TLt90RsO4aXiN97Nk8CTCNXBwbbK9',s:[0x26010eecd9,0x64c8fea3ac],u:'/cdn-cgi/challenge-platform/h/b'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/h/b/scripts/alpha/invisible.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);";
            var _0xh = document.createElement('iframe');
            _0xh.height = 1;
            _0xh.width = 1;
            _0xh.style.position = 'absolute';
            _0xh.style.top = 0;
            _0xh.style.left = 0;
            _0xh.style.border = 'none';
            _0xh.style.visibility = 'hidden';
            document.body.appendChild(_0xh);

            function handler() {
                var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                if (_0xi) {
                    var _0xj = _0xi.createElement('script');
                    _0xj.nonce = '';
                    _0xj.innerHTML = js;
                    _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                }
            }
            if (document.readyState !== 'loading') {
                handler();
            } else if (window.addEventListener) {
                document.addEventListener('DOMContentLoaded', handler);
            } else {
                var prev = document.onreadystatechange || function() {};
                document.onreadystatechange = function(e) {
                    prev(e);
                    if (document.readyState !== 'loading') {
                        document.onreadystatechange = prev;
                        handler();
                    }
                };
            }
        })();
    </script>
</body>

</html>