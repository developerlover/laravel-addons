<?php

namespace Developerlover\LaravelAddons\Http\Controllers\Admin\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class LoginController
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME_ADMIN;

    /**
     * @param Request $request
     *
     * @throws ValidationException
     *
     * @return JsonResponse|RedirectResponse|Response
     */
    public function __invoke(Request $request)
    {
        return $this->login($request);
    }
}
