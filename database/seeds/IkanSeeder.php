<?php

use Illuminate\Database\Seeder;
use App\Ikan;

use Illuminate\Support\Arr;
use Faker\Factory as Faker;

class IkanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 5; $i++){
            Ikan::create([
                'name' => 'Ikan'.$i,
                'type' => Arr::random(['Ikan Air Laut','Ikan Air Tawar']),
            ]);
        }
    }
}
