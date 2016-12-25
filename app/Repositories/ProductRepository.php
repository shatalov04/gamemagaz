<?php
/**
 * Created by PhpStorm.
 * User: Maxim
 * Date: 17.12.2016
 * Time: 23:23
 */

namespace App\Repositories;

use App\Product;

class ProductRepository
{
    public function getAll()
    {
        return Product::all();
    }

    public function getRandomThree()
    {
        return Product::inRandomOrder()->take(3)->get();
    }

    public function getRandom()
    {
        return Product::inRandomOrder()->first();
    }

    public function getLast()
    {
        return Product::orderBy('updated_at','desc')->paginate(6);
    }
}