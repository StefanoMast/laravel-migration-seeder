<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        $companies = [
            'Italo',
            'Trenitalia',
            'Trenord'
        ];

        for ($i = 0; $i < 20; $i++) {
            $train = new Train();
            $train->company = $companies[rand(0, count($companies) -1)];
            $train->starting_station= $faker->city();
            $train->arriving_station= $faker->city();
            $train->departure = $faker->time();
            $train->arrival = $faker->time('H_i_s');
            $train->code = rand(00000000000000000001, 99999999999999999999);
            $train->wagon= rand(1, 11);
            $train->on_time = $faker->boolean();
            $train->delay = $faker->boolean();

            $train->save();
        }
    }
}
