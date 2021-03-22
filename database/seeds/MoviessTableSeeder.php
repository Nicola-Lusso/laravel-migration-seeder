<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Movie;

class MoviessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $films =[
            'Harry Potter 3',
            'Space Jam',
            'Tarzan',
            'Step Up',
            'Il re leone'
        ];

        foreach ($films as $film) {
            $newMovie = new Movie();
            $newMovie->name = $razza;
            $newMovie->language = $faker->randomElement(['ITA', 'USA', 'ESP', 'RUSS', 'CHN']);
            $newMovie->directed_by = $faker->randomElement(['WB', 'Magazine', 'Walt Disney', 'Marvel', 'Sony', 'Pixar']);
            $newMovie->save();
        }

    }
}
