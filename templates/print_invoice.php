<?php
$invoiceHeader = '<table class="sf-data" width="100%" cellspacing="0" cellpadding="0" border="0">
<tbody>
<tr>
<td><strong>Продавец:</strong> </td>
<td>
    <div id="prodavec">ИП Телятников Юрий Михайлович</div>
</td>
</tr>
<tr>
<td>Адрес: </td>
<td>
    <div id="address_prod">109000, Россия, г. Москва, Батюнинский проезд, д.6</div>
</td>
</tr>
<tr>
<td>ИНН/КПП продавца: </td>
<td>
    <div id="innkpp_prod">312323052438 /</div>
</td>
</tr>
<tr>
<td>Грузоотправитель и его адрес: </td>
<td>
    <div id="gruzootpr">Он же</div>
</td>
</tr>
<tr>
<td>Грузополучатель и его адрес: </td>
<td>
    <div id="gruzopol">ИП Копыткин Владимир Владимирович </div>
</td>
</tr>
<tr>
<td>К платежно-расчетному документу №</td>
<td>
    <div id="platezka">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div> 
</td>
</tr>
<tr>
<td><strong>Покупатель:</strong> </td>
<td>
    <div id="pokupatel">ИП Копыткин Владимир Владимирович</div> 
</td>
</tr>
<tr>
<td> Адрес: </td>
<td>
    <div id="address_pokup"></div>
</td>
</tr>
<tr>
<td>ИНН/КПП покупателя: </td>
<td>
    <div id="innkpp_pokup">ИП Копыткин Владимир Владимирович</div>
</td>
</tr>
<tr>
<td>Валюта: наименование, код </td>
<td>
    <div id="valuta">Российский рубль, 643</div>
</td>
</tr>
<tr>
<td>Идентификатор государственного контракта, договора (соглашения): </td>
<td>
    <div id="valuta"> &nbsp; <br><br> </div>
</td>
</tr>
</tbody></table>';

$invoiceTableTop = '<table class="invoice_com_items" id="items" width="100%" cellspacing="0" cellpadding="0" border="0">
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
</thead>  ';
