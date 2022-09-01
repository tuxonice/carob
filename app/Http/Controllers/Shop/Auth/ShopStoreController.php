<?php

namespace App\Http\Controllers\Shop\Auth;

use App\Http\Controllers\Shop\Controller;
use App\Models\Store;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class ShopStoreController extends Controller
{
    public function loginStore(Request $request)
    {
        $organizationId = session()->get('organizationId');
        $stores = Store::where('organization_id', $organizationId)->get();

        return view('shop.auth.login-store', ['stores' => $stores]);
    }

    public function setStore(Request $request)
    {
        $request->session()->put('storeId', $request->get('storeId'));

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
