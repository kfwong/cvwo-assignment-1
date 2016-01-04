<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'username' => $faker->userName,
        'email' => $faker->email,
        'password' => Hash::make('password'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker){
    return [
        'post_content' => HTML::entities('<p>'. implode('</p><p>', $faker->paragraphs(random_int(3,10))) . '</p>'),
        'post_title' => HTML::entities($faker->sentence()),
        'post_featured_image_url' => "http://lorempixel.com/1000/500/food/" . random_int(1,10),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime
    ];
});

$factory->define(App\Comment::class, function(Faker\Generator $faker){
   return [
       'comment_content' => $faker->paragraph()
   ];
});

