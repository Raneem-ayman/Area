<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = Cities::create([
            'city_name' => 'Port',
            
        ]);
        $cit = Cities::create([
            'city_name' => 'Korea',
        ]);
    }
}
