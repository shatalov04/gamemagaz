<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\CategoryRepository;
use App\Repositories\ArticleRepository;

class SidebarComposer
{

    protected $data;

    public function __construct(CategoryRepository $categories, ArticleRepository $articles)
    {
        // Dependencies automatically resolved by service container...
        $this->data['categories'] = $categories->getAll();
        $this->data['articles'] = $articles->getRandomThree();

    }

    public function compose(View $view)
    {
        $view->with('data', $this->data);
    }
}