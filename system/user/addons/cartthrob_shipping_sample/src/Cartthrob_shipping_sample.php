<?php

if (!defined('CARTTHROB_PATH')) {
    Cartthrob_core::core_error('No direct script access allowed');
}

use CartThrob\Plugins\Shipping\ShippingPlugin;
use Money\Money;

class Cartthrob_shipping_sample extends ShippingPlugin
{
    public $title = 'shipping_sample_title';
    public $overview = 'shipping_sample_overview';

    /**
     * Specify field options as an array
     * @var array
     */
    public $settings = [
    ];

    /**
     * @return array
     */
    public function plugin_shipping_options(): array
    {
        $options = [];

        return $options;
    }

    /**
     * @param Cartthrob_cart $cart
     * @return Money
     */
    public function rate(Cartthrob_cart $cart): Money
    {
        $shipping = 0;

        // ee('cartthrob:MoneyService')->fresh();

        return ee('cartthrob:MoneyService')->toMoney($shipping);
    }
}
