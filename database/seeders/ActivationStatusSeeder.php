<?php

namespace Database\Seeders;

use App\Models\ActivationStatus;
use App\Models\Mikrotik;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ActivationStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            ['name' => "new"],
            ['name' => "active"],
            ['name' => "inactive"],

        ];
        foreach($statuses as $status)
        {
            ActivationStatus::create($status);
        }
    }
}
