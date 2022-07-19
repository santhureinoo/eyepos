<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InventorySupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suppliers = [
            'Luxottica',
            'Safilo',
            'Kering',
            'Marchon',
            'Marcolin',
            'U Vision',
            'Titanium',
            'Ah Nam',
            'Sunrise',
            'Viz Global'
        ];

        foreach ($suppliers as $supplier) {
            \App\Models\Inventory\Supplier::factory(1)->create(['name' => $supplier]);
        }
    }
}
