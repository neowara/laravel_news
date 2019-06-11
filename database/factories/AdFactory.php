<?php 
use Faker\Generator as Faker;


$factory->define(App\Ad::class, function (Faker $faker) {

    $ranCat = $faker->randomElement($array = array('cats', 'food'));
    
    return [
        'image' => $faker->imageUrl($width = 640, $height = 480, $ranCat),
        'created_at' => $faker->dateTimeThisDecade($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTimeThisDecade($max = 'now', $timezone = null),
    ];
});