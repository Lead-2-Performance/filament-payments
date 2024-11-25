<?php

namespace TomatoPHP\FilamentPayments\Services\Drivers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Moyaser extends Driver
{
    public static function process(Model $payment): false|string
    {
        return false;
    }

    public static function verify(Request $request): \Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
    {
        return redirect()->to('/');
    }

    public function integration(): array
    {
        return [];
    }
}
