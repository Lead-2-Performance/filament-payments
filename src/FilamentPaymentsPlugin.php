<?php

namespace TomatoPHP\FilamentPayments;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Nwidart\Modules\Module;
use TomatoPHP\FilamentPayments\Filament\Pages\PaymentGateway;
use TomatoPHP\FilamentPayments\Filament\Resources\PaymentResource;

class FilamentPaymentsPlugin implements Plugin
{
    private bool $isActive = false;

    public function getId(): string
    {
        return 'filament-payments';
    }

    public function register(Panel $panel): void
    {
        if (class_exists(Module::class) && \Nwidart\Modules\Facades\Module::find('FilamentPayments')?->isEnabled()) {
            $this->isActive = true;
        } else {
            $this->isActive = true;
        }

        $payment_resource = config('filament-payments.payment_resource');
        $payment_gateway_page = config('filament-payments.payment_gateway_page');

        $resources = [];
        if (config('filament-payments.enable_resources')) {
            $resources[] = $payment_resource;
        }
        $pages = [];
        if (config('filament-payments.enable_resources')) {
            $pages[] = $payment_gateway_page;
        }

        if ($this->isActive) {
            $panel
                ->pages($pages)
                ->resources($resources);
        }
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return new static();
    }
}
