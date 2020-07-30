<?php

namespace Developerlover\LaravelAddons\Http\Controllers\Admin\Auth;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class ResetPasswordFormController extends Controller
{
    use SendsPasswordResetEmails;

    /**
     * @param Request $request
     * @param string  $token
     *
     * @return Application|Factory|View
     */
    public function __invoke(Request $request, string $token = null)
    {
        return view('admin/auth/passwords/reset')->with([
            'token' => $token,
            'email' => $request->email,
        ]);
    }
}
