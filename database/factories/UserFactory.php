<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

// ユーザーファクトリ

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'profile' => $faker->realText($maxNbChars = 250, $indexSize = 2),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => Str::random(10),
    ];
});

// キャラクターファクトリ
$factory->define(App\Eloquents\Character::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'profile' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'gender' => $faker->numberBetween($min = 0, $max = 3),
        'age' => $faker->numberBetween($min = 5, $max = 1000),
        'height' => $faker->numberBetween($min = 50, $max = 300),
        'weight' => $faker->numberBetween($min = 20, $max = 200),
        'size' => $faker->numberBetween($min = 0, $max = 10),
        'talk_image' => $faker->realText($maxNbChars = 30, $indexSize = 2),
        'talk_solid' => $faker->realText($maxNbChars = 30, $indexSize = 2),
        'strength' => $faker->randomDigitNotNull(),
        'constitution' => $faker->randomDigitNotNull(),
        'power' => $faker->randomDigitNotNull(),
        'mind' => $faker->randomDigitNotNull(),
        'speed' => $faker->randomDigitNotNull(),
        'dexterity' => $faker->randomDigitNotNull(),
        'intelligence' => $faker->randomDigitNotNull(),
        'port' => $faker->url(),
        'user_id' => $faker->numberBetween($min = 0, $max = 10),
    ];
});

// スキルファクトリ
$factory->define(App\Eloquents\Skill::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'profile' => $faker->realText($maxNbChars = 150, $indexsize = 2),
        'proficiency' => $faker->randomDigitNotNull(),
        'operability' => $faker->randomDigitNotNull(),
        'range' => $faker->randomDigitNotNull(),
        'influential' => $faker->randomDigitNotNull(),
        'cost' => $faker->randomDigitNotNull(),
        'level' => $faker->randomDigitNotNull(),
        'restrictionA' => $faker->realText($maxNbChars = 30, $indexsize = 2),
        'restrictionB' => $faker->realText($maxNbChars = 30, $indexsize = 2),
    ];
});

// イメージファクトリ
$factory->define(App\Eloquents\Image::class, function (Faker $faker) {
    return [
        'path' => $faker->imageUrl($width = 640, $height = 480),
        'user_id' => $faker->numberBetween($min = 0, $max = 10),
    ];
});

// 掲示板ファクトリ
$factory->define(App\Eloquents\Board::class, function (Faker $faker) {
    return [
        'outhor_id' => $faker->numberBetween($min = 0, $max = 10),
        'caption' => $faker->realText($maxNbChars = 600, $indexsize = 2),
        'image_id' => $faker->numberBetween($min = 0, $max = 10),
    ];
});

// レスポンスファクトリ
$factory->define(App\Eloquents\Response::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 0, $max = 10),
        'comment' => $faker->realText($maxNbChars = 400, $indexsize = 2),
        'url' => $faker->url(),
        'dice' => $faker->numberBetween($min = 0, $max = 99),

    ];
});

// ニュースファクトリ
$factory->define(App\Eloquents\News::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 0, $max = 10),
        'caption' => $faker->realText($maxNbChars = 300, $indexsize = 2),
        'type' => $faker->numberBetween($min = 0, $max = 10),

    ];
});
