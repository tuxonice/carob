<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Admin\Controller;
use App\Models\Organization;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class AdminOrganizationController extends Controller
{
    public function loginOrganization(Request $request)
    {
        $organizations = Organization::all();

        return view('admin.auth.login-organization', ['organizations' => $organizations]);
    }

    public function setOrganization(Request $request)
    {
        $request->session()->put('organizationId', $request->get('organizationId'));

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
