<?php 
use Faker\Generator as Faker;


$factory->define(App\Post::class, function (Faker $faker) {

    $ranCat = $faker->randomElement($array = array('sports', 'fashion', 'people', 'technics', 'nature'));
    
    return [
        'user_id' => '1',
        'title' => $faker->sentence($nbWords = 5, $variableNbWords = true),
        'content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'image' => $faker->imageUrl($width = 640, $height = 480, $ranCat),
        'rank' => $faker->numberBetween($min = 1, $max = 3),
        'category' => $ranCat,
        'created_at' => $faker->dateTimeThisDecade($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTimeThisDecade($max = 'now', $timezone = null),
    ];
});