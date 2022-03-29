<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

class StoreController extends Controller
{


    public function setStore(Request $request)
    {
        $request->session()->put('storeId', $request->get('storeId'));

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
