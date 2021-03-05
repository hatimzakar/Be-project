<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class personSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
            foreach(range(1,10) as $value)
            {
                DB::table('person')->insert(['firstname'=>$faker->name,'lastname'=>$faker->name,'email'=>$faker->email,'phone'=>$faker->phoneNumber,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")  ]);
            }
    }
}
