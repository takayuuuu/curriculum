<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'body' => $faker->realText
    ];
});
