<?php

namespace Developerlover\LaravelAddons\Http\Controllers\Admin\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LogoutController
{
    use AuthenticatesUsers;

    /**
     * @param Request $request
     *
     * @return JsonResponse|RedirectResponse|Response
     */
    public function __invoke(Request $request)
    {
        return $this->logout($request);
    }

    /**
     * The user has logged out of the application.
     *
     * @param Request $request
     *
     * @return mixed
     */
    protected function loggedOut(Request $request)
    {
        return redirect(route('admin.login'));
    }
}
