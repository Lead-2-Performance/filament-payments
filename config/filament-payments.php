<?php

return [
    "drivers" => [
        \TomatoPHP\FilamentPayments\Services\Drivers\Cryptomus::class,
        \TomatoPHP\FilamentPayments\Services\Drivers\Fawery::class,
        \TomatoPHP\FilamentPayments\Services\Drivers\Moyaser::class,
        \TomatoPHP\FilamentPayments\Services\Drivers\Payfort::class,
        \TomatoPHP\FilamentPayments\Services\Drivers\Paymob::class,
        \TomatoPHP\FilamentPayments\Services\Drivers\Paypal::class,
        \TomatoPHP\FilamentPayments\Services\Drivers\Paytabs::class,
        \TomatoPHP\FilamentPayments\Services\Drivers\Plisio::class,
        \TomatoPHP\FilamentPayments\Services\Drivers\StripeV3::class,
        \TomatoPHP\FilamentPayments\Services\Drivers\Tap::class,
    ],
    "path" => "TomatoPHP\\FilamentPayments\\Services\\Drivers",

    "payment_model" => \TomatoPHP\FilamentPayments\Models\Payment::class,
    "gateway_model" => \TomatoPHP\FilamentPayments\Models\PaymentGateway::class,
    "logs_model" => \TomatoPHP\FilamentPayments\Models\PaymentLog::class,
    "team_model" => \App\Models\Team::class,
    "account_model" => \App\Models\Account::class,

    "enable_resources" => true,
    //turned off
    // "payment_resource" => \TomatoPHP\FilamentPayments\Filament\Resources\PaymentResource::class,
    // "payment_gateway_page" => \TomatoPHP\FilamentPayments\Filament\Pages\PaymentGateway::class,
];
