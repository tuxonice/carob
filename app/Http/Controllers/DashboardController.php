<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\Store;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request)
    {
        $organizationId = $request->session()->get('organizationId');
        $storeId = $request->session()->get('storeId');
        $organization = Organization::find($organizationId)->first();
        $store = Store::find($storeId)->first();

        return view('dashboard', [
            'organization' => $organization,
            'store' => $store,
        ]);
    }
}
