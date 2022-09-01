<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class AdminOrganizationController extends Controller
{
    public function loginOrganization(Request $request)
    {
        $organizations = Organization::all();

        return view('auth.admin.login-organization', ['organizations' => $organizations]);
    }

    public function setOrganization(Request $request)
    {
        $request->session()->put('organizationId', $request->get('organizationId'));

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
