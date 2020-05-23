<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
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
            User::create([
                'firstname' =>  $faker->firstname,
                'lastname' => $faker->lastname,
                'username' => Str::random(5),
                'email' => $faker->email,
                'password' => Hash::make('user'),
                'role' => Arr::random(['Customer','Seller']),
                'phonenumber' => Str::random(12),
            ]);
        }
    }
}
