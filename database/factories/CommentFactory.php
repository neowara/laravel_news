<?php 
use Faker\Generator as Faker;


$factory->define(App\Comment::class, function (Faker $faker) {
    $ran = $faker->numberBetween($min = 1, $max = 4);
    return [
        'author' => $faker->email,
        'content' => $faker->paragraph($nbSentences = $ran, $variableNbSentences = true),
        'created_at' => $faker->dateTimeThisDecade($max = 'now', $timezone = null),
    ];
});