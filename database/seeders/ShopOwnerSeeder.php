<?php

namespace Database\Seeders;

use App\Models\ShopOwner;
use Illuminate\Database\Seeder;

class ShopOwnerSeeder extends Seeder
{
    public function run(): void
    {
        ShopOwner::factory()
            ->count(15)
            ->create();
    }
}
