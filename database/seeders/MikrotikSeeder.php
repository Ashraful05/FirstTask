<?php

namespace Database\Seeders;

use App\Models\Mikrotik;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MikrotikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($i=1;$i<=10;$i++)
        {
            Mikrotik::create([
                'name'=>$faker->lastName,
                'user_name'=>$faker->firstName,
                'password'=>Hash::make($faker->password),
                'ip_address'=>$faker->ipv4,
                'ssh_port'=>rand(1,65000),
                'api_port'=>rand(1,65000)
            ]);
        }
    }
}
