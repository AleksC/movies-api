<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->text($maxNbChars = 12),
        'director' => $faker->name,
        'imageUrl' => $faker->imageUrl($width = 640, $height = 480),
        'duration' => $faker->numberBetween($min = 60, $max = 180),
        'releaseDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'genre' => $faker->word
    ];
});
