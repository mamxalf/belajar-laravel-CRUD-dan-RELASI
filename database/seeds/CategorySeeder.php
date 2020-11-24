<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $faker = Faker::create('en_US');

        for ($i=0; $i < 10; $i++) {
            DB::table('categories')->insert([
                'title' => $faker->word,
                'description' => $faker->text($maxNbChars = 100),
            ]);
        }
        //
    }
}
