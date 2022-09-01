<?php

namespace App\Http\Controllers\Shop;

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
        $organization = Organization::find($organizationId);
        $store = Store::find($storeId);

        return view('shop.dashboard', [
            'organization' => $organization,
            'store' => $store,
        ]);
    }
}
