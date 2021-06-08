<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Random;

class RandomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(faker $faker)
     {
       for ($i=0; $i < 10 ; $i++) {
         $fish = new Random();
         $fish->name = $faker->name();
         $fish->price = $faker->randomFloat(2,100,500);
         $fish->description = $faker->paragraph(2);
         $fish->save();
       }

     }
}
