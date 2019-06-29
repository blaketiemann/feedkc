<?php

use App\Services\Enum\EnumFacade as Enum;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Food::class, function (Faker $faker) {
    return [
        'name' => $faker->colorName,
        'status' => $faker->randomElement(Enum::statuses()),
        'message' => str_random(50),
        'business' => $faker->colorName,
        'category' => $faker->randomElement(Enum::categories()),
        'expires_on' => now()->addDays($faker->randomDigitNotNull),
        'quantity_unit' => $faker->randomElement(Enum::quantityUnits()),
        'quantity_amount' => 100.00,
    ];
});
