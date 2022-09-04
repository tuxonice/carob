<?php

namespace App\Http\Controllers\Shop;

use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return View
     */
    public function list(Request $request): View
    {
        $organizationId = $request->session()->get('organizationId');
        $organization = Organization::find($organizationId);

        return view('shop.client', ['clients' => $organization->clients()->get()]);
    }
}
