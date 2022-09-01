<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return View
     */
    public function list(Request $request): View
    {
        return view('shop.order');
    }
}
