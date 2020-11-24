<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('en_US');

        for ($i=0; $i < 5; $i++) {
            DB::table('posts')->insert([
                'id_category' => 2,
                'title' => $faker->word,
                'article' => $faker->text($maxNbChars = 250),
            ]);
        }
    }
}
