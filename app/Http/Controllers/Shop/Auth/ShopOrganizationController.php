<?php

namespace App\Http\Controllers\Shop\Auth;

use App\Http\Controllers\Shop\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;

class ShopOrganizationController extends Controller
{
    public function loginOrganization(Request $request)
    {
        $organizations = Organization::all();

        return view('shop.auth.login-organization', ['organizations' => $organizations]);
    }

    public function setOrganization(Request $request)
    {
        $request->session()->put('organizationId', $request->get('organizationId'));

        return redirect()->route('shop-login-store');
    }
}
