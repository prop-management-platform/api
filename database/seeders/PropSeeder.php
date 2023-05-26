<?php

namespace Database\Seeders;

use App\Models\Label;
use App\Models\Prop;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class PropSeeder extends Seeder
{
    public function run(): void
    {
        $props = Prop::factory()
            ->count(1500)
            ->create();

        $this->seedRandomLabels($props);
    }

    private function seedRandomLabels(Collection $props): void
    {
        $props->each(function ($prop) {
            $prop->labels()->attach(
                Label::inRandomOrder()->take(rand(0, 20))->pluck('id')->toArray()
            );
        });
    }
}
