<?php

namespace Developerlover\LaravelAddons\Http\Controllers\Admin\Auth;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class ShowLoginFormController
{
    /**
     * Show the application's login form.
     *
     * @return Application|Factory|View
     */
    public function __invoke()
    {
        return view('laravel-addons::admin/auth/login');
    }
}
