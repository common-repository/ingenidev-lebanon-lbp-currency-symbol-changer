<?php

/**
 * Plugin Name: ingenidev, Lebanon - LBP Currency Symbol Changer
 * Plugin URI: https://ingenidev.com/lebanon-lbp-currency-symbol-changer-wordpress-plugin/
 * Author: ingenidev
 * Author URI: https://ingenidev.com
 * Description: By default, WooCommerce uses the currency symbol for the Lebanese Pound (Lira) (LBP) as "ل.ل". This ingenidev plugin changes it to "LBP".
 * Version: 1.0.0
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */
defined('ABSPATH') or die('Direct access not permitted');

add_filter('woocommerce_currency_symbol', 'ingenidev_lebcsc_change_leb_currency_symbol', 10, 2);

function ingenidev_lebcsc_change_leb_currency_symbol($currency_symbol, $currency)
{
    switch ($currency) {
        case 'LBP':
            $currency_symbol = 'LBP ';
            break;
    }
    return $currency_symbol;
}
