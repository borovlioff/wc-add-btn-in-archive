<?php
/*
 * Plugin Name: Woocommerce archive buttom
 * Description: Добавление кнопки в архив/каталогтоваров
 * Version: 0.0.1
 * Author: Александр Боровлев
 * Author URI: https://vk.com/borovlioff
 * License: GPLv2 or later
 */

function wab_add_btn() {
    echo '<a href="#contact"><div class="et_pb_button сontact">Записаться</div></a>';
}
add_action( 'woocommerce_after_shop_loop_item', 'wab_add_btn' , 12);

 