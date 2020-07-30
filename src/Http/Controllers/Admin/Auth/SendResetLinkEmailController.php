<?php

namespace Developerlover\LaravelAddons\Http\Controllers\Admin\Auth;

use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SendResetLinkEmailController extends Controller
{
    use SendsPasswordResetEmails;

    /**
     * @param Request $request
     *
     * @return JsonResponse|RedirectResponse
     */
    public function __invoke(Request $request)
    {
        return $this->sendResetLinkEmail($request);
    }
}
