<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class ShopStoreController extends Controller
{
    public function loginStore(Request $request)
    {
        $organizationId = session()->get('organizationId');
        $stores = Store::where('organization_id', $organizationId)->get();

        return view('auth.shop.login-store', ['stores' => $stores]);
    }

    public function setStore(Request $request)
    {
        $request->session()->put('storeId', $request->get('storeId'));

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
