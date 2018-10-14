<?php

use Facades\App\Helpers\UrlHlp;
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

$factory->define(App\Url::class, function (Faker $faker) {
    return [
        'user_id'           => $faker->biasedNumberBetween($min = 0, $max = 2, $function = 'sqrt'),
        'long_url'          => 'https://github.com/realodix/plur',
        'long_url_title'    => 'URL Title',
        'short_url'         => UrlHlp::url_generator(),
        'short_url_custom'  => 0,
        'views'             => $faker->biasedNumberBetween($min = 10000, $max = 999999999, $function = 'sqrt'),
        'ip'                => '8.8.8.8',
    ];
});