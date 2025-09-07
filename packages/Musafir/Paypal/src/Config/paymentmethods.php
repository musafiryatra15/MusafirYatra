<?php

return [
    'paypal_smart_button' => [
        'code'             => 'paypal_smart_button',
        'title'            => 'PayPal Smart Button',
        'description'      => 'PayPal',
        'client_id'        => 'sb',
        'class'            => 'Musafir\Paypal\Payment\SmartButton',
        'sandbox'          => true,
        'active'           => true,
        'sort'             => 4,
    ],

    'paypal_standard' => [
        'code'             => 'paypal_standard',
        'title'            => 'PayPal Standard',
        'description'      => 'PayPal Standard',
        'class'            => 'Musafir\Paypal\Payment\Standard',
        'sandbox'          => true,
        'active'           => true,
        'business_account' => 'test@Musafir.com',
        'sort'             => 3,
    ],
];
