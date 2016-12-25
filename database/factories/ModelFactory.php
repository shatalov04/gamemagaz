<?php
use Faker\Provider\DateTime as DateTimeProvider;

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
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Role::class, function (Faker\Generator $faker) {
    return [
        'name' => 'role',
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->domainName,
        'description' => $faker->text(400),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    $rand = rand(0, 8);
    $category = App\Category::inRandomOrder()->first();
    switch ($rand) {
        case 0:
            $name = 'Batman - Telltale Game Series';
            $photo = '\img\cover\game-6.jpg';
            break;
        case 1:
            $name = 'Deus Ex: Mankind Divided';
            $photo = '\img\cover\game-3.jpg';
            break;
        case 2:
            $name = 'The Witcher 3: Wild Hunt';
            $photo = '\img\cover\game-1.jpg';
            break;
        case 3:
            $name = 'Rocket League';
            $photo = '\img\cover\game-7.jpg';
            break;
        case 4:
            $name = 'Dishonored 2';
            $photo = '\img\cover\game-8.jpg';
            break;
        case 5:
            $name = 'This War of Mine';
            $photo = '\img\cover\game-9.jpg';
            break;
        case 6:
            $name = 'Overwatch';
            $photo = '\img\cover\game-2.jpg';
            break;
        case 7:
            $name = 'World Of Warcraft: Legion';
            $photo = '\img\cover\game-4.jpg';
            break;
        case 8:
            $name = 'Call Of Duty: Black Ops 2';
            $photo = '\img\cover\game-5.jpg';
            break;
        default:
            break;
    }
    return [
        'name' => $name,
        'description' => $faker->text(800),
        'price' => round($faker->numberBetween(300, 1000) / 50) * 50 - 1,
        'photo' => $photo,
        'category_id' => $category->id
    ];
});

$factory->define(App\Article::class, function (Faker\Generator $faker) {
    $rand = rand(0, 4);
    switch ($rand) {
        case 0:
            $name = 'Dynasty Warriors 9 официально анонсирована, разработчики обещают революцию в серии';
            $photo = '\img\news\news-1.png';
            break;
        case 1:
            $name = 'Final Fantasy XV - подробности бесплатного обновления и праздничных наборов';
            $photo = '\img\news\news-2.jpg';
            break;
        case 2:
            $name = 'PlayStation Vita исполнилось 5 лет';
            $photo = '\img\news\news-3.jpg';
            break;
        case 3:
            $name = 'Обзор Seraph';
            $photo = '\img\news\news-4.png';
            break;
        case 4:
            $name = 'Xbox One и Windows 10 получат поддержку Dolby Atmos';
            $photo = '\img\news\news-5.jpg';
            break;
        default:
            break;
    }
    $faker->addProvider(new DateTimeProvider($faker));
    $date = $faker->dateTimeThisMonth();
    return [
        'name' => $name,
        'description' => $faker->text(250),
        'content' => $faker->text(1250),
        'photo' => $photo,
        'publishedon' => $date,
    ];
});