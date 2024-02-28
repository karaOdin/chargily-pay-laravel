<?php

// config for KaraOdin/ChargilyPayLaravel
return [
    /**
     * Public and Secret keys
     * You can find your keys in your Chargily Pay account (Developers Corner -> API Keys)
     *
     * @link https://pay.chargily.com
     */
    'credentials' => [
        'public_key' => env('CHARGILY_PAY_PUBLIC_KEY'),
        'secret_key' => env('CHARGILY_PAY_SECRET_KEY'),
    ],

    /**
     * Set the environment to sandbox or live
     *
     * @link https://pay.chargily.com
     */
    'mode' => env('CHARGILY_PAY_MODE', 'sandbox'),

    /**
     * Set the currency
     *
     * @link https://pay.chargily.com
     */
    'currency' => env('CHARGILY_PAY_CURRENCY', 'DZD'),

    /**
     * Set the language
     *
     * @link https://pay.chargily.com
     */
    'language' => env('CHARGILY_PAY_LANGUAGE', 'en'),

    /*
     * Webhook handler
     */

];
