<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class eventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 3; $i++){

            // insert data ke table pegawai menggunakan Faker
            DB::table('events')->insert([
                'eventName' => $faker->text($maxNbChars = 30),
                'dateTime' => $faker->dateTime,
                'location' => $faker->address,
                'hargaTiket' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 50000, $max = 150000),
                'poster' => $faker->imageUrl($width = 770, $height = 450) ,
                'description' => $faker->text($maxNbChars = 200),
            ]);

        }
    }
}
