<?php

namespace Database\Seeders;

use App\Models\Mikrotik;
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
            Mikrotik::create([
                'name'=>'DLink',
                'user_name'=>$faker->firstName,
                'password'=>Hash::make($faker->password),
                'ip_address'=>$faker->ipv4,
                'ssh_port'=>$faker->numerify('123-456-789'),
                'api_port'=>$faker->bothify('12sdfs3'),
            ]);
        }
    }
}
