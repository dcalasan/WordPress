<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css','woocommerce-layout','woocommerce-smallscreen','woocommerce-general' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION
// add_filter( 'astra_single_post_navigation_enabled', '__return_false' );


add_filter('gettext', 'promeni_cart', 10, 3);

function promeni_cart ($new_text, $related_text, $source)
{
     if ($related_text === 'Product' && $source === 'woocommerce') {
         $new_text = esc_html__('Proizvod', $source);
     }
     return $new_text;
}

add_filter('gettext', 'korpa', 10, 3);

function korpa ($new_text, $related_text, $source)
{
     if ($related_text === 'Price' && $source === 'woocommerce') {
         $new_text = esc_html__('Cena', $source);
     }
     return $new_text;
}

add_filter('gettext', 'izmena', 10, 3);

function izmena ($new_text, $related_text, $source)
{
     if ($related_text === 'Quantity' && $source === 'woocommerce') {
         $new_text = esc_html__('Količina', $source);
     }
     return $new_text;
}

add_filter('gettext', 'promeni', 10, 3);

function promeni ($new_text, $related_text, $source)
{
     if ($related_text === 'Subtotal' && $source === 'woocommerce') {
         $new_text = esc_html__('Ukupno', $source);
     }
     return $new_text;
}

add_filter('gettext', 'prevod', 10, 3);

function prevod ($new_text, $related_text, $source)
{
     if ($related_text === 'Add to cart' && $source === 'woocommerce') {
         $new_text = esc_html__('Dodaj u korpu', $source);
     }
     return $new_text;
}

add_filter('gettext', 'izaberi', 10, 3);

function izaberi ($new_text, $related_text, $source)
{
     if ($related_text === 'Select options' && $source === 'woocommerce') {
         $new_text = esc_html__('Izaberi opcije', $source);
     }
     return $new_text;
}

add_filter('gettext', 'kupon', 10, 3);

function kupon ($new_text, $related_text, $source)
{
     if ($related_text === 'Apply coupon' && $source === 'woocommerce') {
         $new_text = esc_html__('Iskoristi kupon', $source);
     }
     return $new_text;
}

add_filter('gettext', 'kupovina', 10, 3);

function kupovina ($new_text, $related_text, $source)
{
     if ($related_text === 'Proceed to checkout' && $source === 'woocommerce') {
         $new_text = esc_html__('Završi kupovinu', $source);
     }
     return $new_text;
}

add_filter('gettext', 'kod', 10, 3);

function kod ($new_text, $related_text, $source)
{
     if ($related_text === 'Coupon code' && $source === 'woocommerce') {
         $new_text = esc_html__('Kupon kod', $source);
     }
     return $new_text;
}

add_filter('gettext', 'izmeni', 10, 3);

function izmeni ($new_text, $related_text, $source)
{
     if ($related_text === 'Update cart' && $source === 'woocommerce') {
         $new_text = esc_html__('Ažuriraj korpu', $source);
     }
     return $new_text;
}

add_filter('gettext', 'sve_ukupno', 10, 3);

function sve_ukupno ($new_text, $related_text, $source)
{
     if ($related_text === 'Cart totals' && $source === 'woocommerce') {
         $new_text = esc_html__('Ukupna cena', $source);
     }
     return $new_text;
}

add_filter('gettext', 'change_relatedproducts_text', 10, 3);

function change_relatedproducts_text($new_text, $related_text, $source)
{
     if ($related_text === 'Related products' && $source === 'woocommerce') {
         $new_text = esc_html__('Mozda vam se dopadne:', $source);
     }
     return $new_text;
}

add_filter('gettext', 'kategorija', 10, 3);

function kategorija ($new_text, $related_text, $source)
{
     if ($related_text === 'Category' && $source === 'woocommerce') {
         $new_text = esc_html__('Kategorija', $source);
     }
     return $new_text;
}

add_filter('gettext', 'opcija', 10, 3);

function opcija ($new_text, $related_text, $source)
{
     if ($related_text === 'Choose an option' && $source === 'woocommerce') {
         $new_text = esc_html__('Izaberi', $source);
     }
     return $new_text;
}

add_filter('gettext', 'porudžbina', 10, 3);

function porudžbina ($new_text, $related_text, $source)
{
     if ($related_text === 'Place order' && $source === 'woocommerce') {
         $new_text = esc_html__('Pošalji porudžbinu', $source);
     }
     return $new_text;
}


add_filter('gettext', 'naplata', 10, 3);

function naplata ($new_text, $related_text, $source)
{
     if ($related_text === 'Billing details' && $source === 'woocommerce') {
         $new_text = esc_html__('Detalji plaćanja', $source);
     }
     return $new_text;
}

add_filter('gettext', 'ime', 10, 3);

function ime ($new_text, $related_text, $source)
{
     if ($related_text === 'First name' && $source === 'woocommerce') {
         $new_text = esc_html__('Ime', $source);
     }
     return $new_text;
}

add_filter('gettext', 'prezime', 10, 3);

function prezime ($new_text, $related_text, $source)
{
     if ($related_text === 'Last name' && $source === 'woocommerce') {
         $new_text = esc_html__('Prezime', $source);
     }
     return $new_text;
}

add_filter('gettext', 'mejl', 10, 3);

function mejl ($new_text, $related_text, $source)
{
     if ($related_text === 'Email address' && $source === 'woocommerce') {
         $new_text = esc_html__('Email adresa', $source);
     }
     return $new_text;
}

add_filter('gettext', 'kompanija', 10, 3);

function kompanija ($new_text, $related_text, $source)
{
     if ($related_text === 'Company name' && $source === 'woocommerce') {
         $new_text = esc_html__('Ime firme', $source);
     }
     return $new_text;
}

add_filter('gettext', 'skrolovanje', 10, 3);

function skrolovanje ($new_text, $related_text, $source)
{
     if ($related_text === 'Scroll to top' && $source === 'back-to-top') {
         $new_text = esc_html__('Nazad na vrh stranice', $source);
     }
     return $new_text;
}





