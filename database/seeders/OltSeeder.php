<?php

namespace Database\Seeders;

use App\Models\Mikrotik;
use App\Models\Olt;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class OltSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($i=1;$i<=5;$i++)
        {
            Olt::create([
                'name'=>$faker->lastName,
                'username'=>$faker->firstName,
                'password'=>Hash::make($faker->password),
                'ip_address'=>$faker->ipv4,
                'port'=>rand(1,65000),
                'model'=>$faker->word
            ]);
        }
    }
}
