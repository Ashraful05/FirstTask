<?php

namespace Database\Seeders;

use App\Models\OltType;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OltTypesSeeder extends Seeder
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
           OltType::create([
              'name'=>$faker->firstName
           ]);
        }
    }
}
