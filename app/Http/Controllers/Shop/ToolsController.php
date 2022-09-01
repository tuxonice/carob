<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ToolsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return View
     */
    public function index(Request $request): View
    {
        return view('shop.tools');
    }
}
