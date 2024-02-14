<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\Service;
use Faker\Factory as Faker;
use App\Models\service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for( $i = 0; $i < 10; $i++ ) {
        $faker = Faker::create();
        $service = new Service();
        $service->user_id =$i+1;
        $service->name =$faker->name;
        $service->email =$faker->email;
        $service->password =$faker->password;
        $service->save();
       }
    }
}
