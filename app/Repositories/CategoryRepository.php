<?php
/**
 * Created by PhpStorm.
 * User: Maxim
 * Date: 17.12.2016
 * Time: 23:23
 */

namespace App\Repositories;
use App\Category;

class CategoryRepository
{
    public function getAll()
    {
        return Category::all();
    }
}