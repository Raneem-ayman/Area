<?php
use App\Models\Countries;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = Countries::create([
            'country_name' => 'Egypt',
            
        ]);
        $countr = Countries::create([
            'country_name' => 'Korea',
        ]);
    }
}
