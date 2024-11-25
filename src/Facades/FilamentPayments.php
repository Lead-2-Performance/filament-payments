<?php

namespace TomatoPHP\FilamentPayments\Facades;

use Illuminate\Support\Facades\Facade;
use TomatoPHP\FilamentPayments\Services\Contracts\PaymentRequest;

/**
 * @method static void loadDrivers()
 * @method static mixed pay(PaymentRequest $data, bool $json=false)
 * @method static string loadPaymentModelClass()
 * @method static string loadPaymentGatewayModelClass()
 * @method static string loadPaymentLogModelClass()
 * @method static string loadTeamModelClass()
 * @method static string loadAccountModelClass()
 */
class FilamentPayments extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'filament-payments';
    }
}
