<?php

namespace Database\Seeders;

use App\Models\Prop;
use Illuminate\Database\Seeder;

class PropSeeder extends Seeder
{
    public function run(): void
    {
        Prop::factory()
            ->count(1500)
            ->create();
    }
}
