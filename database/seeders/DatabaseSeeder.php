<?php

namespace Database\Seeders;

use App\Models\Organization;
use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create(['email' => 'admin@example.com']);
        User::factory(10)->create();
        Organization::factory(1)->create();
        Store::factory(3)->create();
    }
}
