<?php

namespace Developerlover\LaravelAddons\Http\Controllers\Admin\Auth;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class ForgotPasswordFormController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function __invoke()
    {
        return view('admin/auth/passwords/email');
    }
}
