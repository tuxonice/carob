<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function loginOrganization(Request $request)
    {
        $organizations = Organization::all();

        return view('auth.login-organization', ['organizations' => $organizations]);
    }

    public function setOrganization(Request $request)
    {
        $request->session()->put('organizationId', $request->get('organizationId'));

        return redirect()->route('login-store');
    }
}
