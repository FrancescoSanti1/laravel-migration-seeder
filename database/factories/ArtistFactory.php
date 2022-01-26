<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name' => $faker -> name(),
        'year_of_birth' => $faker -> year(),
        'bio' => $faker -> text(100),
        'img_path' => $faker -> lexify('????????????')
    ];
});
