<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class productSeed extends Seeder
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
              DB::table('product')->insert(['name'=>$faker->name,'price'=>$faker->numberBetween($min = 100, $max = 9000),'color'=>$faker->colorName,'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")  ]);
            }
    }
}
