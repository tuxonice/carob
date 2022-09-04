<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    public function stores()
    {
        return $this->hasMany(Store::class);
    }

    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
