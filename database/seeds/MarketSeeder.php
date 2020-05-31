<?php

use Illuminate\Database\Seeder;
use App\Market;
use Faker\Factory as Faker;

class MarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        // for($i = 1; $i <= 5; $i++){
        //     Market::create([
        //         'name' => 'Pasar'.$i,
        //         'address' => $faker->address,
        //     ]);
        // }

        Market::create([
            'name' => 'Pasar Baru',
            'address' => $faker->address,
        ]);
        Market::create([
            'name' => 'Pasar Keutapang',
            'address' => $faker->address,
        ]);
        Market::create([
            'name' => 'Pasar Tua',
            'address' => $faker->address,
        ]);
        Market::create([
            'name' => 'Pasar Seutui',
            'address' => $faker->address,
        ]);
    }
}
