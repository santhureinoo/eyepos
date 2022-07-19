<?php

namespace Database\Seeders;

use App\Models\ServiceOffers;
use Illuminate\Database\Seeder;

class ServiceOffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            'Refraction Test',
            'Eye Health Examination',
            'Contact Lens Fitting'
        ];

        foreach ($services as $service) {
            ServiceOffers::factory(1)->create(['name' => $service]);
        }
    }
}
