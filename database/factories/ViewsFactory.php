<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Views;
use Faker\Generator as Faker;

$factory->define(Views::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'user_account_id' => $faker->randomDigitNotNull,
        'category_id' => $faker->randomDigitNotNull,
        'course_id' => $faker->randomDigitNotNull,
        'iterm_id' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
