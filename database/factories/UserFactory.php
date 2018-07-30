<?php

use App\Post;
use App\User;
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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(Post::class,  function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'likes' => $faker->randomNumber(3),
        'price' => $faker->randomNumber(2),
        'color' => '#aabbcc',
        'link' => $faker->url,
        'time' => '00:12:35',
        'user_id' => function(){
            return factory(User::class)->create()->id;
        }
    ];
});

$factory->define(App\Role::class,  function (Faker $faker) {
    return [
      'name' => $faker->word
    ];
});
