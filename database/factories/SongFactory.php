<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'album_id' => $faker -> numberBetween(1, 100),
        'title' => $faker -> sentence(2),
        'num_of_play' => $faker -> numberBetween(0, 500000),
        'duration' => $faker -> numberBetween(30, 600),
        'explicit' => $faker -> boolean()
    ];
});
