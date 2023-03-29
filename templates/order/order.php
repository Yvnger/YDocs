<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?= plugins_url( 'order.style.css', __FILE__ ); ?>">
    <title>Заказ №<?= $order->get_id() ?></title>
</head>
<body>

<div class="order-branding">
    <table>
        <tr>
            <td>
                <div class="company-info">
                    <div style="color: #212F49; font-size: 16px; line-height: 20px" class="company-name">
                        Mir-Chemodanov.ru - Оптовая продажа багажа №1 по России
                    </div>
                    <div style="color: #212F49" class="company-address">
                        г. Москва Тел.: +7 (925) 335-74-10 E-mail: mirchemodanov@mail.ru
                    </div>
                </div>
            </td>
            <td><div style="width: 30px"></div></td>
            <td>
                <div class="company-logo">
                    <img src="<?= plugins_url( 'logo.png', __FILE__ ); ?>" alt="" />
                </div>
            </td>
        </tr>
    </table>
</div><!-- .order-branding -->

<h3>Содержание заказа</h3>

<table class="tm-order-info">
    <tr>
        <td>
            <h3><?php _e( 'Адрес доставки (Юр.лиц)', 'woocommerce-delivery-notes' ); ?></h3>
            <address>

                <?php if( !$order->get_formatted_billing_address() ) _e( 'N/A', 'woocommerce-delivery-notes' ); else echo apply_filters( 'wcdn_address_billing', $order->get_formatted_billing_address(), $order ); ?>

            </address>
        </td>
        <td>
            <h3><?php _e( 'Адрес доставки (Физ.лиц)', 'woocommerce-delivery-notes' ); ?></h3>
            <address>

                <?php if( !$order->get_formatted_shipping_address() ) _e( 'N/A', 'woocommerce-delivery-notes' ); else echo apply_filters( 'wcdn_address_shipping', $order->get_formatted_shipping_address(), $order ); ?>

            </address>
        </td>
        <td>
            <ul class="info-list">
                <?php $fields = apply_filters( 'wcdn_order_info_fields', wcdn_get_order_info( $order ), $order ); ?>
                <?php foreach( $fields as $field ) : ?>
                    <li>
                        <strong><?php echo apply_filters( 'wcdn_order_info_name', $field['label'], $field ); ?></strong>
                        <span><?php echo apply_filters( 'wcdn_order_info_content', $field['value'], $field ); ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>

            <?php do_action( 'wcdn_after_info', $order ); ?>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <?php if( wcdn_has_customer_notes( $order ) ) : ?>
                <div>
                    <h3 style="margin: 0"><?php _e( 'Комментарий к заказу:', 'woocommerce-delivery-notes' ); ?></h3>
                    <p style="margin: 0"><?php wcdn_customer_notes( $order ); ?></p>
                </div>
            <?php endif; ?>
        </td>
    </tr>
</table>

<div class="order-items">
    <table>
        <thead>
        <tr>
            <?php if($template_type != 'delivery-note') {?>
                <th class="head-photo"><span><?php _e('Фото', 'woocommerce-delivery-notes'); ?></span></th>
            <?php } ?>
            <th class="head-name"><span><?php _e('Продукт', 'woocommerce-delivery-notes'); ?></span></th>
            <th><span><?php _e('Артикул', 'woocommerce-delivery-notes'); ?></span></th>
            <th class="head-item-price"><span><?php _e('Цена', 'woocommerce-delivery-notes'); ?></span></th>
            <th class="head-quantity"><span><?php _e('Количество', 'woocommerce-delivery-notes'); ?></span></th>
            <th class="head-price"><span><?php _e('Всего', 'woocommerce-delivery-notes'); ?></span></th>
        </tr>
        </thead>

        <tbody>
        <?php if( sizeof( $order->get_items() ) > 0 ) : ?>
            <?php foreach( $order->get_items() as $item ) : ?>

                <?php
                $product = apply_filters( 'wcdn_order_item_product', $order->get_product_from_item( $item ), $item );
                $item_meta = new WC_Order_Item_Meta( $item['item_meta'], $product );
                ?>

                <tr>
                    <?php if($template_type != 'delivery-note') {?>
                        <td class="product-photo">
                            <?php
                            if( isset( $product->id ) && has_post_thumbnail( $product->id ) ) {
                                echo get_the_post_thumbnail( $product->id, array( 40, 40 ) );
                            }
                            ?>
                        </td>
                    <?php } ?>
                    <td class="product-name"<?php echo ($template_type == 'delivery-note' ? ' style="width: 45%;"' : '')?>>
                        <?php do_action( 'wcdn_order_item_before', $product, $order ); ?>

                        <span style="color: #212F49" class="name"><?php echo apply_filters( 'wcdn_order_item_name', $item['name'], $item ); ?></span>

                        <?php $item_meta->display(); ?>

                        <dl class="extras">
                            <?php if( $product && $product->exists() && $product->is_downloadable() && $order->is_download_permitted() ) : ?>

                                <dt><?php _e( 'Download:', 'woocommerce-delivery-notes' ); ?></dt>
                                <dd><?php printf( __( '%s Files', 'woocommerce-delivery-notes' ), count( $order->get_item_downloads( $item ) ) ); ?></dd>

                            <?php endif; ?>

                            <?php
                            $fields = apply_filters( 'wcdn_order_item_fields', array(), $product, $order );
                            foreach ( $fields as $field ) :
                                ?>

                                <dt><?php echo str_replace('SKU:', 'Артикул:', $field['label']); ?></dt>
                                <dd><?php echo $field['value']; ?></dd>

                            <?php endforeach; ?>

                            <?php
                            $attributes = $product->get_attributes();
                            //print_r($attributes);
                            foreach ( $attributes as $attribute ) {
                                if ($attribute[ 'name' ] == "pa_tsvet" ) {
                                    echo '<dt>Цвет:</dt><dd>'.array_shift( wc_get_product_terms( $product->id,  $attribute[ 'name' ] ) ).'</dd>';
                                }
                            }
                            ?>
                        </dl>
                    </td>
                    <td>
                        <span><?php echo $product->get_sku(); ?></span>
                    </td>
                    <td class="product-item-price">
                        <span><?php echo wcdn_get_formatted_item_price( $order, $item ); ?></span>
                    </td>
                    <td class="product-quantity">
                        <span><?php echo apply_filters( 'wcdn_order_item_quantity', $item['qty'], $item ); ?></span>
                    </td>
                    <td class="product-price">
                        <span><?php echo $order->get_formatted_line_subtotal( $item ); ?></span>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>

        <tfoot>
        <?php if( $totals = $order->get_order_item_totals() ) : ?>
            <?php foreach( $totals as $total ) : ?>
                <tr>
                    <td class="total-name"></td>
                    <td class="total-item-price"></td>
                    <?php if($template_type != 'delivery-note') {?>
                        <td class="total-quantity"></td>
                    <?php } ?>
                    <td class="total-quantity"></td>
                    <td class="total-quantity"><span><?php echo $total['label']; ?></span></td>
                    <td class="total-price"><span><?php echo $total['value']; ?></span></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tfoot>
    </table>

</div><!-- .order-items -->

<script>
    // Wait for the new page to load
    window.addEventListener('load', function() {
        // Print the page
        window.print();
    }, false);
</script>
</body>
</html>