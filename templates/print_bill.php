<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 plus MathML 2.0//EN" "//www.w3.org/Math/DTD/mathml2/xhtml-math11-f.dtd">
<html xmlns="//www.w3.org/1999/xhtml">

<head profile="//dublincore.org/documents/dcmi-terms/">
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
    <title>СЧЕТ № <?= $data['order_id'] ?></title>
    <style type="text/css">
        @page {}

        table {
            border-collapse: collapse;
            border-spacing: 0;
            empty-cells: show;
            z-index: 1;
            position: relative;
        }

        td,
        th {
            vertical-align: top;
            font-size: 10pt;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            clear: both
        }

        ol,
        ul {
            margin: 0;
            padding: 0;
        }

        li {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        < !-- "li span.odfLiEnd" - IE 7 issue-->li span. {
            clear: both;
            line-height: 0;
            width: 0;
            height: 0;
            margin: 0;
            padding: 0;
        }

        span.footnodeNumber {
            padding-right: 1em;
        }

        span.annotation_style_by_filter {
            font-size: 95%;
            font-family: times;
            background-color: #fff000;
            margin: 0;
            border: 0;
            padding: 0;
        }

        * {
            margin: 0;
        }

        .ta1 {
            writing-mode: lr-tb;
        }

        .Default {
            font-family: times;
            padding: 0.028in;
            font-size: 8pt;
        }

        .ce1 {
            font-size: 8pt;
            padding: 0.028in;
            font-family: times;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
        }

        .ce10 {
            font-size: 14pt;
            padding: 0.028in;
            font-family: times;
            vertical-align: middle;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: bold;
        }

        .ce11 {
            font-size: 8pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-width: 0.15em;
            border-bottom-style: solid;
            border-bottom-color: #000000;
            border-left-style: none;
            border-right-style: none;
            border-top-style: none;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce12 {
            font-size: 9pt;
            padding: 0.028in;
            font-family: times;
            border-style: none;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce13 {
            font-size: 9pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-style: none;
            border-left-width: 0.15em;
            border-left-style: solid;
            border-left-color: #000000;
            border-right-style: none;
            border-top-width: 0.15em;
            border-top-style: solid;
            border-top-color: #000000;
            vertical-align: middle;
            text-align: center ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: bold;
        }

        .ce14 {
            font-size: 8pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-style: none;
            border-left-width: 0.15em;
            border-left-style: solid;
            border-left-color: #000000;
            border-right-style: none;
            border-top-width: 0.1em;
            border-top-style: solid;
            border-top-color: #000000;
            vertical-align: top;
            text-align: center ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce15 {
            font-size: 8pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-style: none;
            border-left-style: none;
            border-right-style: none;
            border-top-width: 0.15em;
            border-top-style: solid;
            border-top-color: #000000;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce16 {
            font-size: 9pt;
            padding: 0.028in;
            font-family: times;
            border-style: none;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce17 {
            font-size: 9pt;
            padding: 0.028in;
            font-family: times;
            border-style: none;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: bold;
        }

        .ce18 {
            font-size: 9pt;
            padding: 0.028in;
            font-family: times;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: bold;
        }

        .ce19 {
            font-size: 9pt;
            padding: 0.028in;
            font-family: times;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce2 {
            font-size: 8pt;
            padding: 0.028in;
            font-family: times;
            border-style: none;
            vertical-align: middle;
            text-align: center ! important;
            margin-left: 0in;
            writing-mode: page;
        }

        .ce20 {
            font-size: 9pt;
            padding: 0.028in;
            font-family: times;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce21 {
            font-size: 9pt;
            padding: 0.028in;
            font-family: times;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: bold;
        }

        .ce22 {
            font-size: 9pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-style: none;
            border-left-width: 0.1em;
            border-left-style: solid;
            border-left-color: #000000;
            border-right-style: none;
            border-top-width: 0.15em;
            border-top-style: solid;
            border-top-color: #000000;
            vertical-align: middle;
            text-align: center ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: bold;
        }

        .ce23 {
            font-size: 8pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-style: none;
            border-left-width: 0.1em;
            border-left-style: solid;
            border-left-color: #000000;
            border-right-style: none;
            border-top-width: 0.1em;
            border-top-style: solid;
            border-top-color: #000000;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce24 {
            font-size: 9pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-style: none;
            border-left-style: none;
            border-right-width: 0.1em;
            border-right-style: solid;
            border-right-color: #000000;
            border-top-width: 0.1em;
            border-top-style: solid;
            border-top-color: #000000;
            vertical-align: middle;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce25 {
            font-size: 8pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-style: none;
            border-left-style: none;
            border-right-style: none;
            border-top-width: 0.1em;
            border-top-style: solid;
            border-top-color: #000000;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce26 {
            font-size: 8pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-width: 0.1em;
            border-bottom-style: solid;
            border-bottom-color: #000000;
            border-left-style: none;
            border-right-style: none;
            border-top-style: none;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce27 {
            font-size: 8pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-width: 0.1em;
            border-bottom-style: solid;
            border-bottom-color: #000000;
            border-left-style: none;
            border-right-style: none;
            border-top-style: none;
            vertical-align: top;
            text-align: right ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce28 {
            font-size: 9pt;
            padding: 0.028in;
            font-family: times;
            border-width: 0.1em;
            border-style: solid;
            border-color: #000000;
            vertical-align: middle;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce29 {
            font-size: 9pt;
            padding: 0.028in;
            font-family: times;
            border-width: 0.1em;
            border-style: solid;
            border-color: #000000;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce3 {
            font-size: 8pt;
            padding: 0.028in;
            font-family: times;
            vertical-align: middle;
            text-align: center ! important;
            margin-left: 0in;
            writing-mode: page;
        }

        .ce30 {
            font-size: 8pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-style: none;
            border-left-width: 0.1em;
            border-left-style: solid;
            border-left-color: #000000;
            border-right-style: none;
            border-top-width: 0.1em;
            border-top-style: solid;
            border-top-color: #000000;
            vertical-align: top;
            text-align: right ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce31 {
            font-size: 8pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-style: none;
            border-left-style: none;
            border-right-style: none;
            border-top-width: 0.1em;
            border-top-style: solid;
            border-top-color: #000000;
            vertical-align: top;
            text-align: right ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce32 {
            font-size: 8pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-style: none;
            border-left-width: 0.1em;
            border-left-style: solid;
            border-left-color: #000000;
            border-right-style: none;
            border-top-width: 0.1em;
            border-top-style: solid;
            border-top-color: #000000;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce33 {
            font-size: 9pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-style: none;
            border-left-width: 0.1em;
            border-left-style: solid;
            border-left-color: #000000;
            border-right-width: 0.1em;
            border-right-style: solid;
            border-right-color: #000000;
            border-top-width: 0.1em;
            border-top-style: solid;
            border-top-color: #000000;
            vertical-align: middle;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce34 {
            font-size: 9pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-width: 0.1em;
            border-bottom-style: solid;
            border-bottom-color: #000000;
            border-left-width: 0.1em;
            border-left-style: solid;
            border-left-color: #000000;
            border-right-width: 0.1em;
            border-right-style: solid;
            border-right-color: #000000;
            border-top-style: none;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce35 {
            font-size: 8pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-style: none;
            border-left-style: none;
            border-right-style: none;
            border-top-width: 0.1em;
            border-top-style: solid;
            border-top-color: #000000;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce36 {
            font-size: 9pt;
            padding: 0.028in;
            font-family: times;
            vertical-align: top;
            text-align: right ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: bold;
        }

        .ce37 {
            font-size: 9pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-style: none;
            border-left-width: 0.1em;
            border-left-style: solid;
            border-left-color: #000000;
            border-right-width: 0.15em;
            border-right-style: solid;
            border-right-color: #000000;
            border-top-width: 0.15em;
            border-top-style: solid;
            border-top-color: #000000;
            vertical-align: middle;
            text-align: center ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: bold;
        }

        .ce38 {
            font-size: 8pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-style: none;
            border-left-style: none;
            border-right-width: 0.15em;
            border-right-style: solid;
            border-right-color: #000000;
            border-top-width: 0.1em;
            border-top-style: solid;
            border-top-color: #000000;
            vertical-align: top;
            text-align: right ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce4 {
            font-size: 9pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-style: none;
            border-left-width: 0.1em;
            border-left-style: solid;
            border-left-color: #000000;
            border-right-width: 0.1em;
            border-right-style: solid;
            border-right-color: #000000;
            border-top-width: 0.1em;
            border-top-style: solid;
            border-top-color: #000000;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce5 {
            font-size: 8pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-width: 0.1em;
            border-bottom-style: solid;
            border-bottom-color: #000000;
            border-left-width: 0.1em;
            border-left-style: solid;
            border-left-color: #000000;
            border-right-width: 0.1em;
            border-right-style: solid;
            border-right-color: #000000;
            border-top-style: none;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce6 {
            font-size: 9pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-style: none;
            border-left-width: 0.1em;
            border-left-style: solid;
            border-left-color: #000000;
            border-right-style: none;
            border-top-width: 0.1em;
            border-top-style: solid;
            border-top-color: #000000;
            vertical-align: middle;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce7 {
            font-size: 9pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-style: none;
            border-left-width: 0.1em;
            border-left-style: solid;
            border-left-color: #000000;
            border-right-style: none;
            border-top-width: 0.1em;
            border-top-style: solid;
            border-top-color: #000000;
            vertical-align: top;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce8 {
            font-size: 8pt;
            padding: 0.028in;
            font-family: times;
            border-bottom-width: 0.1em;
            border-bottom-style: solid;
            border-bottom-color: #000000;
            border-left-width: 0.1em;
            border-left-style: solid;
            border-left-color: #000000;
            border-right-style: none;
            border-top-style: none;
            vertical-align: middle;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce9 {
            font-size: 14pt;
            padding: 0.028in;
            font-family: times;
            border-style: none;
            vertical-align: middle;
            text-align: left ! important;
            margin-left: 0in;
            writing-mode: page;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: bold;
        }

        .co1 {
            width: 0.0709in;
        }

        .co10 {
            width: 0.0437in;
        }

        .co11 {
            width: 0.6362in;
        }

        .co2 {
            width: 0.2118in;
        }

        .co3 {
            width: 0.1146in;
        }

        .co4 {
            width: 0.0965in;
        }

        .co5 {
            width: 0.1673in;
        }

        .co6 {
            width: 0.1583in;
        }

        .co7 {
            width: 0.0173in;
        }

        .co8 {
            width: 0.1937in;
        }

        .co9 {
            width: 0.1409in;
        }

        .ro1 {
            height: 0.1563in;
        }

        .ro2 {
            height: 0.111in;
        }

        .ro3 {
            height: 0.0972in;
        }

        .ro4 {
            height: 0.5181in;
        }

        .ro5 {
            height: 0.1638in;
        }

        .ro6 {
            height: 0.1846in;
        }

        < !-- ODF styles with no properties representable as CSS --> {}
    </style>
</head>

<body dir="ltr" style="width:760px; writing-mode:lr-tb; margin: 0 auto">
    <table border="0" cellspacing="0" cellpadding="0" class="ta1">
        <colgroup>
            <col width="8" />
            <col width="24" />
            <col width="13" />
            <col width="11" />
            <col width="24" />
            <col width="24" />
            <col width="24" />
            <col width="24" />
            <col width="24" />
            <col width="24" />
            <col width="24" />
            <col width="24" />
            <col width="24" />
            <col width="24" />
            <col width="24" />
            <col width="19" />
            <col width="18" />
            <col width="19" />
            <col width="19" />
            <col width="24" />
            <col width="2" />
            <col width="22" />
            <col width="24" />
            <col width="16" />
            <col width="8" />
            <col width="24" />
            <col width="16" />
            <col width="8" />
            <col width="24" />
            <col width="24" />
            <col width="24" />
            <col width="19" />
            <col width="5" />
            <col width="24" />
            <col width="24" />
            <col width="24" />
            <col width="24" />
            <col width="13" />
            <col width="71" />
        </colgroup>
        <tr class="ro1">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td colspan="37" rowspan="3" style="text-align:center;width:0.2118in; " class="ce2">
                <p>Внимание! Оплата данного счета означает согласие с условиями поставки товара. Уведомление об оплате </p>
                <p> обязательно, в противном случае не гарантируется наличие товара на складе. Товар отпускается по факту</p>
                <p> прихода денег на р/с Поставщика, самовывозом, при наличии доверенности и паспорта.</p>
            </td>
            <td style="text-align:left;width:0.6362in; " class="ce1"> </td>
        </tr>
        <tr class="ro1">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.6362in; " class="ce1"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0965in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1583in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0173in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1937in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0437in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce1"> </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td colspan="19" rowspan="2" style="text-align:left;width:0.2118in; " class="ce4">
                <p>УРАЛСИБ</p>
            </td>
            <td colspan="5" style="text-align:left;width:0.0173in; " class="ce28">
                <p>БИК</p>
            </td>
            <td colspan="13" style="text-align:left; width:0.2118in; " class="ce33">
                <p>044525787</p>
            </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td colspan="5" rowspan="2" style="text-align:left;width:0.0173in; " class="ce29">
                <p>Сч. №</p>
            </td>
            <td colspan="13" rowspan="2" style="text-align:left;width:0.2118in; " class="ce34">
                <p>Банк/сч 40802810002180000543</p>
            </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td colspan="19" style="text-align:left;width:0.2118in; " class="ce5">
                <p>Банк получателя</p>
            </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce6">
                <p>ИНН</p>
            </td>
            <td colspan="8" style="text-align:left; width:0.2118in; " class="ce24">
                <p>312323052438 </p>
            </td>
            <td colspan="2" style="text-align:left;width:0.2118in; " class="ce6">
                <p>КПП </p>
            </td>
            <td colspan="8" style="text-align:left; width:0.2118in; " class="ce24">
                <p></p>
            </td>
            <td colspan="5" rowspan="4" style="text-align:left;width:0.0173in; " class="ce29">
                <p>Сч. №</p>
            </td>
            <td colspan="13" rowspan="4" style="text-align:left;width:0.2118in; " class="ce29">
                <p>к/сч 30101810100000000787</p>
            </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td colspan="19" rowspan="2" style="text-align:left;width:0.2118in; " class="ce7">
                <p>ИП Телятников Юрий Михайлович</p>
            </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td colspan="19" style="text-align:left;width:0.2118in; " class="ce8">
                <p>Получатель</p>
            </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0965in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1583in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0173in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1937in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0437in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce1"> </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td colspan="37" rowspan="2" style="text-align:left;width:0.2118in; " class="ce9">
                <p>Счет на оплату № <?= $data['order_id'] ?> от <?= $data['date']['day'] . '.' . $data['date']['month_num'] . '.' . $data['date']['year'] ?> г.</p>
            </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro3">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td colspan="37" style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.6362in; " class="ce1"> </td>
        </tr>
        <tr class="ro3">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0965in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1583in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0173in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1937in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0437in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce1"> </td>
            <td style="text-align:left;width:0.6362in; " class="ce1"> </td>
        </tr>
        <tr class="ro4">
            <td style="text-align:left;width:0.0709in; " class="Default"> </td>
            <td colspan="5" style="text-align:left;width:0.2118in; " class="ce12">
                <p>Поставщик:</p>
            </td>
            <td colspan="32" style="text-align:left;width:0.2118in; " class="ce17">
                <p>ИП Телятников Юрий Михайлович ИНН 312323052438, тел.:
                    +7 (925) 335-74-10</p>
            </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td colspan="5" style="text-align:left;width:0.2118in; " class="ce12">
                <p>Покупатель:</p>
            </td>
            <td colspan="32" style="text-align:left;width:0.2118in; " class="ce1">
                <p><strong><?= $order->get_meta('_billing_company') ?>, ИНН/КПП: <?= $order->get_meta('_billing_vatin') ?>, <?= $address['display'] ?></strong></p>
            </td>
            <td class="Default" style="text-align:left;width:0.6362in; ">&nbsp;</td>
        </tr>
        <tr class="ro3">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0965in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1583in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0173in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1937in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0437in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce1"> </td>
            <td style="text-align:left;width:0.6362in; " class="ce1"> </td>
        </tr>

        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td colspan="2" style="text-align:left;width:0.2118in; " class="ce13">
                <p>№</p>
            </td>
            <td colspan="18" style="text-align:left;width:0.0965in; " class="ce22">
                <p>Товары (работы, услуги)</p>
            </td>
            <td colspan="3" style="text-align:left;width:0.1937in; " class="ce22">
                <p>Кол-во</p>
            </td>
            <td colspan="3" style="text-align:left;width:0.0709in; " class="ce22">
                <p>Ед.</p>
            </td>
            <td colspan="5" style="text-align:left;width:0.0709in; " class="ce22">
                <p>Цена</p>
            </td>
            <td colspan="6" style="text-align:left;width:0.0437in; " class="ce37">
                <p>Сумма</p>
            </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>

        <?php foreach ($data['items'] as $item) : ?>
            <tr class="ro5">
                <td style="text-align:left;width:0.0709in; " class="Default"> </td>
                <td colspan="2" style="text-align:right; width:0.2118in; " class="ce14">
                    <p><?= $item['count_num'] ?></p>
                </td>
                <td style="text-align:left;width:0.0965in; " colspan="18" class="ce23"> <?= $item['name'] ?>, <?= $item['sku'] ?> </td>
                <td style="text-align:left;width:0.1937in; " class="ce30"> </td>
                <td style="text-align:left;width:0.2118in; " class="ce31"><?= $item['quantity'] ?></td>
                <td style="text-align:left;width:0.1409in; " class="ce31"> </td>
                <td style="text-align:left;width:0.0709in; " class="ce32"> </td>
                <td style="text-align:left;width:0.2118in; " class="ce35">шт </td>
                <td style="text-align:left;width:0.1409in; " class="ce35"> </td>
                <td style="text-align:left;width:0.0709in; " class="ce30"> </td>
                <td style="text-align:left;width:0.2118in; " class="ce31"></td>
                <td style="text-align:center;width:0.2118in; " class="ce31"><?= $item['price']['float'] ?></td>
                <td style="text-align:left;width:0.2118in; " class="ce31"> </td>
                <td style="text-align:left;width:0.1673in; " class="ce31"> </td>
                <td style="text-align:left;width:0.0437in; " class="ce30"> </td>
                <td style="text-align:left;width:0.2118in; " class="ce31"></td>
                <td style="text-align:center;width:0.2118in; " class="ce31"><?= $item['total']['float'] ?></td>
                <td style="text-align:left;width:0.2118in; " class="ce31"> </td>
                <td style="text-align:left;width:0.2118in; " class="ce31"> </td>
                <td style="text-align:left;width:0.1146in; " class="ce38"> </td>
                <td style="text-align:left;width:0.6362in; " class="Default"> </td>
            </tr>
        <?php endforeach; ?>

        <tr class="ro3">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce15"> </td>
            <td style="text-align:left;width:0.0965in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce15"> </td>
            <td style="text-align:left;width:0.1583in; " class="ce15"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce15"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.0173in; " class="ce15"> </td>
            <td style="text-align:left;width:0.1937in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce15"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce15"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce15"> </td>
            <td style="text-align:left;width:0.0437in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce15"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce15"> </td>
            <td style="text-align:left;width:0.6362in; " class="ce1"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0965in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1583in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0173in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1937in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce36"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce36"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce36"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce36"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce36">
                <p>Итого:</p>
            </td>
            <td style="width: 1.0055in; text-align: center ;" colspan="6">
                <p><?= $data['total']['float'] ?></p>
                <p>
                </p>
            </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0965in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1583in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0173in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1937in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td colspan="5" style="text-align:right;width:0.8736in; " class="ce36">
                <p>Без налога (НДС)</p>
            </td>
            <td style="text-align: center" colspan="6">
                <p>- </p>
            </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0965in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1583in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0173in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1937in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce36"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce36"> </td>
            <td style="text-align:right;width:0.5909in; " class="ce36" colspan="3">
                <p>Всего к оплате:</p>
            </td>
            <td style="text-align: center" colspan="6" class=""><?= $data['total']['float'] ?></td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td colspan="37" style="text-align:left;width:0.2118in; " class="ce16">
                <p>Всего наименований <?= $data['quantity']['int'] ?>, на сумму <?= $data['total']['withCurrency'] ?></p>
            </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro6">
            <td style="text-align:left;width:0.0709in; " class="Default"> </td>
            <td colspan="36" style="text-align:left;width:0.2118in; " class="ce17">
                <p><?= $data['total']['string'] ?> 00 копеек</p>
            </td>
            <td style="text-align:left;width:0.1146in; " class="Default"> </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro3">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce11"> </td>
            <td style="text-align:left;width:0.0965in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce11"> </td>
            <td style="text-align:left;width:0.1583in; " class="ce11"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce11"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.0173in; " class="ce11"> </td>
            <td style="text-align:left;width:0.1937in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce11"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce11"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce11"> </td>
            <td style="text-align:left;width:0.0437in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce11"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce11"> </td>
            <td style="text-align:left;width:0.6362in; " class="ce1"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0965in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1583in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0173in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1937in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0437in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce1"> </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce18">
                <p>Руководитель</p>
            </td>
            <td style="text-align:left;width:0.1146in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0965in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce26"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce26"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce26"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce26"> </td>
            <td colspan="9" style="text-align:left;width:0.2118in; " class="ce27">
                <p>Телятников Юрий Михайлович </p>
            </td>
            <td style="text-align:left;width:0.0173in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1937in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce18">
                <p>Бухгалтер</p>
            </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce26"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce26"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce26"> </td>
            <td colspan="7" style="text-align:left;width:0.1673in; " class="ce27">
                <p></p>
            </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0965in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1583in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0173in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1937in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0437in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce1"> </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
        <tr class="ro2">
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0965in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1583in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0173in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1937in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1409in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0709in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1673in; " class="ce1"> </td>
            <td style="text-align:left;width:0.0437in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.2118in; " class="ce1"> </td>
            <td style="text-align:left;width:0.1146in; " class="ce1"> </td>
            <td style="text-align:left;width:0.6362in; " class="Default"> </td>
        </tr>
    </table>
</body>

</html>