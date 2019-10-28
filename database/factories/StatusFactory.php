<?php

use App\Models\Status;
use Faker\Generator as Faker;

$factory->define(Status::class, function (Faker $faker) {
    $data_time = $faker->date . ' ' . $faker->time();
    return [
        'content' => $faker->text(),
        'created_at' => $data_time,
        'updated_at' => $data_time
    ];
});
