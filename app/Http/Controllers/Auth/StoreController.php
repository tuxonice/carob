<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function loginStore(Request $request)
    {
        $stores = Store::all();

        return view('auth.login-store', ['stores' => $stores]);
    }

    public function setStore(Request $request)
    {
        $request->session()->put('storeId', $request->get('storeId'));

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
