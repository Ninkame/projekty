<?php
function theme_setup()
{

    add_theme_support('menus');
    add_theme_support('post_thumbnails');
    add_theme_support('custom-logo');
    add_filter('woocommerce_show_page_title', '__return_false');
    add_filter('woocommerce_show_page_result', '__return_false');
    add_filter('wc_add_to_cart_message_html', '__return_false');
    add_filter('woocommerce_template_single_price', '__return_false');

    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
    add_action('woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 5);

    remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
    remove_action('woocommerce_after_shop_loop', 'woocommerce_result_count', 20);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
}
add_action('after_setup_theme', 'theme_setup');


function add_scripts()
{
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'add_scripts');

// Vlastne logo
function themename_custom_logo_setup()
{
    $defaults = array(
        'width'                => 80,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
        'class' => 'logo'
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');

// Zmena class v logu
function change_logo_class($html)
{
    $html = str_replace('custom-logo', 'logo', $html);
    return $html;
}
add_filter('get_custom_logo', 'change_logo_class');




register_nav_menus(array(
    'primary' => 'menu',
    'secondary' => 'secondary',
));
// vymazanie UL z LI NAV menu (WP default)
function wp_nav_menu_no_ul()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'primary',
        'fallback_cb' => 'fall_back_menu'
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);
}

function fall_back_menu()
{
    return;
}



// prida class do linku v polozke menu
//    <li><a class="nav-link active">MENU POLOZKY</a></li>
function wpse156165_menu_add_class($atts, $item, $args)
{
    $atts['class'] = 'nav-link active';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3);



// Vymaze class a ID z LI v NAV MENU
function clear_nav_menu_item_id($id, $item, $args)
{
    return "";
}
add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);

function clear_nav_menu_item_class($classes, $item, $args)
{
    return array('nav-item');
}
add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);


// WOOCOMMERCE
function wpdocs_log_me_shortcode_fn()
{

    $args = array(
        'label_log_in'   => __('Log In'),
    );

    return wp_login_form($args);
}
add_shortcode('wpdocs_log_me', 'wpdocs_log_me_shortcode_fn');







function change_cart_totals_text($translated, $text, $domain)
{
    if (is_cart() && $translated == 'Cart totals') {
        $translated = __('Summary', 'woocommerce');
    }
    if (is_cart() && $translated == 'Quantity') {
        $translated = __('Qty', 'woocommerce');
    }
    if (is_cart() && $translated == 'Product') {
        $translated = __('Item', 'woocommerce');
    }
    if (is_cart() && $translated == 'Total') {
        $translated = __('Order total', 'woocommerce');
    }

    return $translated;
}
add_filter('gettext', 'change_cart_totals_text', 20, 3);


function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 240,
        'single_image_width'    => 500,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 3,
            'max_rows'        => 3,
            'default_columns' => 4,
            'min_columns'     => 3,
            'max_columns'     => 5,
        ),
    ));
}

add_action('after_setup_theme', 'mytheme_add_woocommerce_support');


function woocommerce_custom_product_add_to_cart_text()
{
    return __('Add to card', 'woocommerce');
}
add_filter('woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text');
