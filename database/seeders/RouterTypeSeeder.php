<?php

namespace Database\Seeders;

use App\Models\RouterType;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouterTypeSeeder extends Seeder
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
            RouterType::create([
               'name'=>$faker->firstName
            ]);
        }
    }
}
