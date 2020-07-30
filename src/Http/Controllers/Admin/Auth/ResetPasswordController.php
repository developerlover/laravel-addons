<?php

namespace Developerlover\LaravelAddons\Http\Controllers\Admin\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME_ADMIN;

    /**
     * Reset the given user's password.
     *
     * @param Request $request
     *
     * @return RedirectResponse|JsonResponse
     */
    public function __invoke(Request $request)
    {
        return $this->reset($request);
    }
}
