<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InventoryCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Inventory\Category::factory(1)->create(['name' => 'Dailies']);
        \App\Models\Inventory\Category::factory(1)->create(['name' => 'Contact Lenses']);
        \App\Models\Inventory\Category::factory(1)->create(['name' => 'PAL']);
        \App\Models\Inventory\Category::factory(1)->create(['name' => 'Frames']);
        \App\Models\Inventory\Category::factory(1)->create(['name' => 'Sunglasses']);
        \App\Models\Inventory\Category::factory(1)->create(['name' => 'Accessories']);
    }
}
