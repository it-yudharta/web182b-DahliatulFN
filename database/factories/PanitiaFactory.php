<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Panitia;
use Faker\Generator as Faker;

$factory->define(Panitia::class, function (Faker $faker) {
    return [
        'nama' => $faker-> name,
        'jabatan' => $faker-> name,
        'no_hp' => $faker-> numberBetween(10,50),
    ];
});
