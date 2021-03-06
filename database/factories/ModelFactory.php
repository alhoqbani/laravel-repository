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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Topic::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'user_id' => function() {
            return factory(\App\User::class)->create()->id;
        },
        'title' => $title = $faker->unique()->sentence(5, true),
        'slug' => str_slug($title),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Post::class, function (Faker\Generator $faker) {

    return [
        'user_id' => function() {
            return factory(\App\User::class)->create()->id;
        },
        
        'topic_id' => function() {
            return factory(\App\Topic::class)->create()->id;
        },
        'body' => $title = $faker->realText(),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Address::class, function (Faker\Generator $faker) {

    return [
        'user_id' => function() {
            return factory(\App\User::class)->create()->id;
        },
        
        'street' => $title = $faker->streetAddress(),
    ];
});
