<style type="text/css">
    .ydocs__button-list {
        display: flex;
        flex-direction: column;
        padding: 0;
        margin: 0;
        list-style: none;
        border: 1px solid #ccc;
        border-radius: 5px;
        overflow: hidden;
    }

    .ydocs__button-item {
        margin: 0;
    }

    .ydocs__button-item:not(:last-child) {
        border-bottom: 1px solid #ccc;
    }

    .ydocs__button-icon {
        fill: #ccc;
    }

    .ydocs__button-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px;
        font-family: Arial, Helvetica, sans-serif;
        text-decoration: none;
        color: #333;
        transition-property: background-color, color;
        transition-duration: .3s;
        transition-timing-function: ease-in-out;
    }

    .ydocs__button-link:hover {
        background-color: #f0f0f0;
    }

</style>

<ul class="ydocs__button-list">
    <li class="ydocs__button-item">
        <a href="<?= wp_nonce_url(admin_url('admin-ajax.php?action=print_invoice&order_id=' . $order_id), 'print_invoice_' . $order_id) ?>"
           target="_blank" class="ydocs__button-link" onclick="printInvoice();">
            Счёт-фактура
            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                 class="ydocs__button-icon">
                <path d="M21 7H18V2H6V7H3V18H6V22H18V18H21V7ZM8 4H16V7H8V4ZM16 20H8V15H16V20ZM19 16H18V13H6V16H5V9H19V16Z"/>
                <path d="M9 10H6V12H9V10Z"/>
            </svg>
        </a>
    </li>
    <li class="ydocs__button-item">
        <a href="<?= wp_nonce_url(admin_url('admin-ajax.php?action=print_bill&order_id=' . $order_id), 'print_bill_' . $order_id) ?>"
           target="_blank" class="ydocs__button-link" onload="window.print();">
            Счёт
            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                 class="ydocs__button-icon">
                <path d="M21 7H18V2H6V7H3V18H6V22H18V18H21V7ZM8 4H16V7H8V4ZM16 20H8V15H16V20ZM19 16H18V13H6V16H5V9H19V16Z"/>
                <path d="M9 10H6V12H9V10Z"/>
            </svg>
        </a>
    </li>
    <li class="ydocs__button-item">
        <a href="<?= wp_nonce_url(admin_url('admin-ajax.php?action=print_contract&order_id=' . $order_id), 'print_contract_' . $order_id) ?>"
           target="_blank" class="ydocs__button-link" onload="window.print();">
            Договор
            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                 class="ydocs__button-icon">
                <path d="M21 7H18V2H6V7H3V18H6V22H18V18H21V7ZM8 4H16V7H8V4ZM16 20H8V15H16V20ZM19 16H18V13H6V16H5V9H19V16Z"/>
                <path d="M9 10H6V12H9V10Z"/>
            </svg>
        </a>
    </li>
    <li class="ydocs__button-item">
        <a href="<?= wp_nonce_url(admin_url('admin-ajax.php?action=print_waybill&order_id=' . $order_id), 'print_waybill_' . $order_id) ?>"
           target="_blank" class="ydocs__button-link" onload="window.print();">
            Накладная
            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                 class="ydocs__button-icon">
                <path d="M21 7H18V2H6V7H3V18H6V22H18V18H21V7ZM8 4H16V7H8V4ZM16 20H8V15H16V20ZM19 16H18V13H6V16H5V9H19V16Z"/>
                <path d="M9 10H6V12H9V10Z"/>
            </svg>
        </a>
    </li>
    <li class="ydocs__button-item">
        <a href="<?= wp_nonce_url(admin_url('admin-ajax.php?action=print_transport_waybill&order_id=' . $order_id), 'print_transport_waybill_' . $order_id) ?>"
           target="_blank" class="ydocs__button-link" onload="window.print();">
            Транспортная накладная
            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                 class="ydocs__button-icon">
                <path d="M21 7H18V2H6V7H3V18H6V22H18V18H21V7ZM8 4H16V7H8V4ZM16 20H8V15H16V20ZM19 16H18V13H6V16H5V9H19V16Z"/>
                <path d="M9 10H6V12H9V10Z"/>
            </svg>
        </a>
    </li>
    <li class="ydocs__button-item">
        <a href="<?= wp_nonce_url(admin_url('admin-ajax.php?action=print_order&order_id=' . $order_id), 'print_order_' . $order_id) ?>"
           target="_blank" class="ydocs__button-link" onload="window.print();">
            Заказ
            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                 class="ydocs__button-icon">
                <path d="M21 7H18V2H6V7H3V18H6V22H18V18H21V7ZM8 4H16V7H8V4ZM16 20H8V15H16V20ZM19 16H18V13H6V16H5V9H19V16Z"/>
                <path d="M9 10H6V12H9V10Z"/>
            </svg>
        </a>
    </li>
</ul>