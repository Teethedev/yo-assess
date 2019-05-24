<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Room;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'room_number' => $faker->unique()->randomNumber($nbDigits = 4),
        'available' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});
