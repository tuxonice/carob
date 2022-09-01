<?php

namespace App\View\Components;

use App\Models\Organization;
use App\Models\Store;
use Illuminate\View\Component;

class LoginInfo extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $organizationId = session()->get('organizationId');
        $storeId = session()->get('storeId');
        $organizationName = Organization::find($organizationId)->name;
        $storeName = $storeId ? Store::find($storeId)->name : '';

        return view('components.login-info', [
            'organizationName' => $organizationName,
            'storeName' => $storeName,
        ]);
    }
}
