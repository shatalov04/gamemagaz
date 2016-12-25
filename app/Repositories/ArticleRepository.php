<?php
/**
 * Created by PhpStorm.
 * User: Maxim
 * Date: 17.12.2016
 * Time: 23:23
 */

namespace App\Repositories;
use App\Article;

class ArticleRepository
{
    public function getAll()
    {
        return Article::all();
    }
    public function getRandomThree()
    {
        return Article::inRandomOrder()->take(3)->get();
    }
}