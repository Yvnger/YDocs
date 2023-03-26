<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 plus MathML 2.0//EN" "//www.w3.org/Math/DTD/mathml2/xhtml-math11-f.dtd">
<html xmlns="//www.w3.org/1999/xhtml">

<head profile="//dublincore.org/documents/dcmi-terms/">
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
    <title>Транспортная накладная № <?= $data['order_id'] ?></title>
    <style type="text/css">
        table {
            width: 100%;
            border: 0;
            border-spacing: 0 0;
            margin-bottom: 30px;
        }

        table td {
            position: relative;
            padding: 5px 0;
        }

        table td.border {
            border-bottom: 2px solid #000;
            width: 50%;
        }

        td>table {
            margin-bottom: 0
        }

        h3 {
            margin: 0 0 20px 0
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-small {
            font-size: 80%
        }

        .hor-separ {
            width: 30px
        }

        .vertical-separ {
            width: 40px
        }

        .vertical-separ:after {
            content: "";
            position: absolute;
            top: 0;
            left: 50%;
            margin: 0 0 0 -1px;
            height: 100%;
            width: 2px;
            background: #000;
        }

        table.table-border {
            border: 2px solid #000;
            border-collapse: collapse;
        }

        table.table-border td {
            border: 2px solid #000;
        }

        #printBtn {
            width: 300px;
            margin: 10px auto;
            text-align: center;
            color: white;
            background: blue;
            padding: 10px;
            display: block;
            cursor: pointer;
        }

        @media print {
            #printBtn {
                display: none;
            }
        }
    </style>
</head>

<body style="    max-width: 1000px; margin: 0 auto;">
    <button id="printBtn" class="button" onclick="javascript:
print();">Распечатать накладную</button>
    <div style="text-align: right">
        <p>Приложение N 4<br> к Правилам перевозки грузов автомобильным транспортом<br> (в ред. Постановлений Правительства РФ от 30.12.2011 № 1208, от 03.12.2015 № 1311)<br>Форма</p>
    </div>
    <h1 class="text-center">ТРАНСПОРТНАЯ НАКЛАДНАЯ</h1>
    <table>
        <tr>
            <td class="border">Экземпляр № 1</td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td class="border text-left">Дата <b><?= $data['date']['day'] . '.' . $data['date']['month_num'] . '.' . $data['date']['year'] ?> г.</b> | № <b><?= $data['order_id'] ?></b> </td>
        </tr>
        <tr>
            <td>
                <h3 class="text-center">1. Грузоотправитель (грузовладелец)</h3>
            </td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td>
                <h3 class="text-center">2. Грузополучатель</h3>
            </td>
        </tr>
        <tr>
            <td class="border">Телятников Ю.М. ИП Телятников Ю.М., 109000, Россия, г. Москва ТЦ «Южные-Ворота» линия Д6 павильон 57-59 (19км МКАД стр. 1, вл. 20). тел.: +7 (495) 151-00-04</td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td class="border">Он же , <?= $address['display'] ?> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(фамилия, имя, отчество, адрес места жительства, номер телефона - для физического лица (уполномоченного лица))</td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td class="text-center text-small">(фамилия, имя, отчество, адрес места жительства, номер телефона - для физического лица (уполномоченного лица))</td>
        </tr>
        <tr>
            <td class="border"> </td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(полное наименование, адрес места нахождения, номер телефона - для юридического лица)</td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td class="text-center text-small">(полное наименование, адрес места нахождения – для юридического лица)</td>
        </tr>
    </table>
    <h3 class="text-center">3. Наименование груза</h3>
    <table>
        <tr>
            <td class="border text-center">Галантерея (чемоданы, сумки, рюкзаки) </td>
        </tr>
        <tr>
            <td class="text-center text-small">(отгрузочное наименование груза (для опасных грузов – в соответствии с ДОПОГ), его состояние и другая необходимая информация о грузе)</td>
        </tr>
        <tr>
            <td class="border text-center "> <b> <?= $data['quantity']['int'] ?> </b></td>
        </tr>
        <tr>
            <td class="text-center text-small">(количество грузовых мест, маркировка, вид тары и способ упаковки)</td>
        </tr>
        <tr>
            <td class="border text-center"><b> 0 </b>кг</td>
        </tr>
        <tr>
            <td class="text-center text-small">(масса нетто (брутто) грузовых мест в килограммах, размеры (высота, ширина и длина) в метрах, объем грузовых мест в кубических метрах)</td>
        </tr>
        <tr>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(в случае перевозки опасного груза – информация по каждому опасному веществу, материалу или изделию в соответствии с пунктом 5.4.1 ДОПОГ)</td>
        </tr>
    </table>
    <h3 class="text-center">4. Сопроводительные документы на груз</h3>
    <table>
        <tr>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(перечень прилагаемых к транспортной накладной документов, предусмотренных ДОПОГ, санитарными, таможенными, карантинными, иными правилами в соответствии с законодательством Российской Федерации, либо регистрационные номера указанных документов, если такие документы (сведения о таких документах) содержатся в государственных информационных системах)</td>
        </tr>
        <tr>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(перечень прилагаемых к грузу сертификатов, паспортов качества, удостоверений, разрешений, инструкций, товарораспорядительных и других документов, наличие которых установлено законодательством Российской Федерации, либо регистрационные номера указанных документов, если такие документы (сведения о таких документах) содержатся в государственных информационных системах)</td>
        </tr>
    </table>
    <h3 class="text-center">5. Указания грузоотправителя</h3>
    <table>
        <tr>
            <td class="border text-center">Автомобиль с тентом, что бы обеспечить гидроизоляцию, PEUGEOT BOXER, К945КН71, Коваленко Игорь Владимирович</td>
        </tr>
        <tr>
            <td class="text-center text-small">(параметры транспортного средства, необходимые для осуществления перевозки груза (тип, марка, грузоподъемность, вместимость и др.))</td>
        </tr>
        <tr>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(указания, необходимые для выполнения фитосанитарных, санитарных, карантинных, таможенных и прочих требований, установленных законодательством Российской Федерации)</td>
        </tr>
        <tr>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(рекомендации о предельных сроках и температурном режиме перевозки, сведения о запорно-пломбировочных устройствах (в случае их предоставления грузоотправителем))</td>
        </tr>
        <tr>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(объявленная стоимость (ценность) груза, запрещение перегрузки груза)</td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <h3 class="text-center">6. Прием груза</h3>
            </td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td>
                <h3 class="text-center">7. Сдача груза</h3>
            </td>
        </tr>
        <tr>
            <td class="border text-center"> г. Москва ТЦ «Южные-Ворота» линия Д6 павильон 57-59</td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td class="border text-center"> г. Москва ТЦ «Южные-Ворота» линия Д6 павильон 57-59</td>
        </tr>
        <tr>
            <td class="text-center text-small">(адрес места погрузки)</td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td class="text-center text-small">(адрес места выгрузки)</td>
        </tr>
        <tr>
            <td class="border text-center"><?= $data['date']['day'] . '.' . $data['date']['month_num'] . '.' . $data['date']['year'] ?></td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td class="border text-center"><?= $data['date']['day'] . '.' . $data['date']['month_num'] . '.' . $data['date']['year'] ?></td>
        </tr>
        <tr>
            <td class="text-center text-small">(дата и время подачи транспортного средства под погрузку)</td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td class="text-center text-small">(дата и время подачи транспортного средства под выгрузку)</td>
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                        <td class="border"> </td>
                        <td>
                            <div class="hor-separ"></div>
                        </td>
                        <td class="border"> </td>
                    </tr>
                    <tr>
                        <td class="text-center text-small">(адрес места погрузки)</td>
                        <td>
                            <div class="hor-separ"></div>
                        </td>
                        <td class="text-center text-small">(адрес места выгрузки)</td>
                    </tr>
                </table>
            </td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td>
                <table>
                    <tr>
                        <td class="border"> </td>
                        <td>
                            <div class="hor-separ"></div>
                        </td>
                        <td class="border"> </td>
                    </tr>
                    <tr>
                        <td class="text-center text-small">(фактические дата и время прибытия)</td>
                        <td>
                            <div class="hor-separ"></div>
                        </td>
                        <td class="text-center text-small">(фактические дата и время убытия)</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td class="border"> </td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(фактическое состояние груза, тары, упаковки, маркировки и опломбирования)</td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td class="text-center text-small">(фактическое состояние груза, тары, упаковки, маркировки и опломбирования)</td>
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                        <td class="border"> </td>
                        <td>
                            <div class="hor-separ"></div>
                        </td>
                        <td class="border"> </td>
                    </tr>
                    <tr>
                        <td class="text-center text-small">(масса груза)</td>
                        <td>
                            <div class="hor-separ"></div>
                        </td>
                        <td class="text-center text-small">(количество грузовых мест)</td>
                    </tr>
                </table>
            </td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td>
                <table>
                    <tr>
                        <td class="border"> </td>
                        <td>
                            <div class="hor-separ"></div>
                        </td>
                        <td class="border"> </td>
                    </tr>
                    <tr>
                        <td class="text-center text-small">(масса груза)</td>
                        <td>
                            <div class="hor-separ"></div>
                        </td>
                        <td class="text-center text-small">(количество грузовых мест)</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                        <td style="width:33%;" class="border"> </td>
                        <td>
                            <div class="hor-separ"></div>
                        </td>
                        <td style="width:33%;" class="border"> </td>
                        <td>
                            <div class="hor-separ"></div>
                        </td>
                        <td style="width:33%;" class="border"> </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-center text-small">(должность, подпись, расшифровка подписи грузоотправителя (уполномоченного лица))</td>
                    </tr>
                </table>
            </td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td>
                <table>
                    <tr>
                        <td style="width:33%;" class="border"> </td>
                        <td>
                            <div class="hor-separ"></div>
                        </td>
                        <td style="width:33%;" class="border"> </td>
                        <td>
                            <div class="hor-separ"></div>
                        </td>
                        <td style="width:33%;" class="border"> </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-center text-small">(должность, подпись, расшифровка подписи грузоотправителя (уполномоченного лица))</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table>
                    <tr>
                        <td style="width:33%;" class="border"> </td>
                        <td>
                            <div class="hor-separ"></div>
                        </td>
                        <td style="width:33%;" class="border"> </td>
                        <td>
                            <div class="hor-separ"></div>
                        </td>
                        <td style="width:33%;" class="border"> </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-center text-small">(подпись, расшифровка подписи водителя, принявшего груз для перевозки)</td>
                    </tr>
                </table>
            </td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td>
                <table>
                    <tr>
                        <td style="width:33%;" class="border"> </td>
                        <td>
                            <div class="hor-separ"></div>
                        </td>
                        <td style="width:33%;" class="border"> </td>
                        <td>
                            <div class="hor-separ"></div>
                        </td>
                        <td style="width:33%;" class="border"> </td>
                    </tr>
                    <tr>
                        <td colspan="5" class="text-center text-small">(подпись, расшифровка подписи водителя, принявшего груз для перевозки)</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <h3 class="text-center">8. Условия перевозки</h3>
    <table>
        <tr>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(сроки, по истечении которых грузоотправитель и грузополучатель вправе считать груз утраченным, форма уведомления о проведении экспертизы для определения размера фактических недостачи, повреждения (порчи) груза)</td>
        </tr>
        <tr>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(размер платы и предельный срок хранения груза в терминале перевозчика, сроки погрузки (выгрузки) груза, порядок предоставления и установки приспособлений, необходимых для погрузки, выгрузки и перевозки груза)</td>
        </tr>
        <tr>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(порядок внесения в транспортную накладную записи о массе груза и способе ее определения, опломбирования крытых транспортных средств и контейнеров)</td>
        </tr>
        <tr>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(порядок осуществления погрузо-разгрузочных работ, выполнения работ по промывке и дезинфекции транспортных средств)</td>
        </tr>
        <tr>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(порядок выполнения погрузо-разгрузочных работ, работ по промывке и дезинфекции транспортных средств)</td>
        </tr>
        <tr>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(размер штрафа за невывоз груза по вине перевозчика, несвоевременное предоставление транспортного средства, контейнера, просрочку доставки груза, порядок исчисления срока просрочки)</td>
        </tr>
        <tr>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(размер штрафа за непредъявление транспортных средств для перевозки груза, за задержку (простой) транспортных средств, поданных под погрузку, выгрузку, за простой специализированных транспортных средств и задержку (простой) контейнеров)</td>
        </tr>
    </table>
    <h3 class="text-center">9. Информация о принятии заказа (заявки) к исполнению</h3>
    <table>
        <tr>
            <td style="width:25%;" class="border"> </td>
            <td>
                <div class="hor-separ"></div>
            </td>
            <td style="width:50%;" class="border"> </td>
            <td>
                <div class="hor-separ"></div>
            </td>
            <td style="width:25%;" class="border"> </td>
        </tr>
        <tr>
            <td style="width:25%;" class="text-center text-small">(дата принятия заказа (заявки) к исполнению)</td>
            <td>
                <div class="hor-separ"></div>
            </td>
            <td style="width:50%;" class="text-center text-small">(фамилия, имя, отчество, должность лица, принявшего заказ (заявку) к исполнению)</td>
            <td>
                <div class="hor-separ"></div>
            </td>
            <td style="width:25%;" class="text-center text-small">(подпись)</td>
        </tr>
    </table>
    <h3 class="text-center">10. Перевозчик</h3>
    <table>
        <tr>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(фамилия, имя, отчество, адрес места жительства, номер телефона - для физического лица (уполномоченного лица))</td>
        </tr>
        <tr>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(наименование и адрес места нахождения, номер телефона - для юридического лица)</td>
        </tr>
        <tr>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(фамилия, имя, отчество, данные о средствах связи (при их наличии) водителя (водителей))</td>
        </tr>
    </table>
    <h3 class="text-center">11. Транспортное средство</h3>
    <table>
        <tr>
            <td style="width: 70%" class="border"> </td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td style="width: 30%" class="border"> </td>
        </tr>
        <tr>
            <td style="width: 70%" class="text-center text-small">(количество, тип, марка, грузоподъемность (в тоннах), вместимость (в кубических метрах))</td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td style="width: 30%" class="text-center text-small">(регистрационные номера)</td>
        </tr>
        <tr>
            <td style="width: 70%" class="border"> </td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td style="width: 30%" class="border"> </td>
        </tr>
        <tr>
            <td style="width: 70%" class="border"> </td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td style="width: 30%" class="border"> </td>
        </tr>
    </table>
    <h3 class="text-center">12. Оговорки и замечания перевозчика</h3>
    <table>
        <tr>
            <td class="border"> </td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(фактическое состояние груза, тары, упаковки, маркировки и опломбирования при приеме груза)</td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td class="text-center text-small">(фактическое состояние груза, тары, упаковки, маркировки и опломбирования при сдаче груза)</td>
        </tr>
        <tr>
            <td class="border"> </td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(изменение условий перевозки при движении)</td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td class="text-center text-small">(изменение условий перевозки при выгрузке)</td>
        </tr>
    </table>
    <h3 class="text-center">13. Прочие условия</h3>
    <table>
        <tr>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(номер, дата и срок действия специального разрешения, установленный маршрут перевозки опасного, тяжеловесного или крупногабаритного груза и др.)</td>
        </tr>
        <tr>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(режим труда и отдыха водителя в пути следования, сведения о коммерческих и иных актах)</td>
        </tr>
    </table>
    <h3 class="text-center">14. Переадресовка</h3>
    <table>
        <tr>
            <td class="border"> </td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(дата, форма переадресовки (устно или письменно))</td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td class="text-center text-small">(адрес нового пункта выгрузки, дата и время подачи транспортного средства под выгрузку)</td>
        </tr>
        <tr>
            <td class="border"> </td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td class="border"> </td>
        </tr>
        <tr>
            <td class="text-center text-small">(сведения о лице, от которого получено указание на переадресовку (наименование, фамилия, имя, отчество и др.))</td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td class="text-center text-small">(при изменении получателя груза – новое наименование грузополучателя и место его нахождения)</td>
        </tr>
    </table>
    <h3 class="text-center">15. Стоимость услуг перевозчика и порядок расчета провозной платы</h3>
    <table>
        <tr>
            <td style="width: 30%" class="border"> </td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td style="width: 70%" class="border"> </td>
        </tr>
        <tr>
            <td style="width: 30%" class="text-center text-small">(стоимость услуги в рублях, порядок (механизм) расчета (исчислений) платы)</td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td style="width: 70%" class="text-center text-small">(расходы перевозчика и предъявляемые грузоотправителю платежи за проезд по платным автомобильным дорогам,</td>
        </tr>
        <tr>
            <td style="width: 30%" class="border"> </td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td style="width: 70%" class="border"> </td>
        </tr>
        <tr>
            <td style="width: 30%" class="text-center text-small">(размер провозной платы (заполняется после окончания перевозки) в рублях)</td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td style="width: 70%" class="text-center text-small">за перевозку опасных, тяжеловесных и крупногабаритных грузов, уплату таможенных пошлин и сборов,</td>
        </tr>
        <tr>
            <td style="width: 30%" class="border"> </td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td style="width: 70%" class="border"> </td>
        </tr>
        <tr>
            <td style="width: 30%" class="text-center text-small"></td>
            <td>
                <div class="vertical-separ"></div>
            </td>
            <td style="width: 70%" class="text-center text-small">выполнение погрузо-разгрузочных работ, а также работ по промывке и дезинфекции транспортных средств)</td>
        </tr>
        <tr>
            <td colspan="3" class="border"> </td>
        </tr>
        <tr>
            <td colspan="3" class="text-center text-small">(полное наименование организации плательщика (грузоотправителя), адрес, банковские реквизиты организации плательщика (грузоотправителя))</td>
        </tr>
    </table>
    <h3 class="text-center">16. Дата составления, подписи сторон</h3>
    <table>
        <tr>
            <td style="width: 30%" class="border"> </td>
            <td>
                <div class="hor-separ"></div>
            </td>
            <td style="width: 10%" class="border"><?= $data['date']['day'] . '.' . $data['date']['month_num'] . '.' . $data['date']['year'] ?></td>
            <td>
                <div class="hor-separ"></div>
            </td>
            <td style="width: 10%" class="border"> </td>
            <td>
                <div class="hor-separ"></div>
            </td>
            <td style="width: 30%" class="border"> </td>
            <td>
                <div class="hor-separ"></div>
            </td>
            <td style="width: 10%" class="border"><?= $data['date']['day'] . '.' . $data['date']['month_num'] . '.' . $data['date']['year'] ?></td>
            <td>
                <div class="hor-separ"></div>
            </td>
            <td style="width: 10%" class="border"> </td>
        </tr>
        <tr>
            <td style="width: 30%" class="text-center text-small">(грузоотправитель (грузовладелец) (уполномоченное лицо))</td>
            <td>
                <div class="hor-separ"></div>
            </td>
            <td style="width: 10%" class="text-center text-small">(дата)</td>
            <td>
                <div class="hor-separ"></div>
            </td>
            <td style="width: 10%" class="text-center text-small">(подпись)</td>
            <td>
                <div class="hor-separ"></div>
            </td>
            <td style="width: 30%" class="text-center text-small">(перевозчик (уполномоченное лицо))</td>
            <td>
                <div class="hor-separ"></div>
            </td>
            <td style="width: 10%" class="text-center text-small">(дата)</td>
            <td>
                <div class="hor-separ"></div>
            </td>
            <td style="width: 10%" class="text-center text-small">(подпись)</td>
        </tr>
    </table>
    <h3 class="text-center">17. Отметки грузоотправителей, грузополучателей и перевозчиков</h3>
    <table class="table-border">
        <tr>
            <td class="text-small">Краткое описание обстоятельств, послуживших основанием для отметки</td>
            <td class="text-center text-small">Расчет и размер штрафа</td>
            <td class="text-center text-small">Подпись, дата</td>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
        </tr>
    </table>
</body>

</html>