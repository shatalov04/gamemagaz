<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class)->create([
            'name' => 'Action',
        ]);
        factory(App\Category::class)->create([
            'name' => 'RPG',
        ]);
        factory(App\Category::class)->create([
            'name' => 'Квесты',
        ]);
        factory(App\Category::class)->create([
            'name' => 'Онлайн-игры',
        ]);
        factory(App\Category::class)->create([
            'name' => 'Стратегии',
        ]);
    }
}
