<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\ProductRepository;


class LastProductsComposer
{

    protected $data;

    public function __construct(ProductRepository $products)
    {
        // Dependencies automatically resolved by service container...
        $this->data['products'] = $products->getLast();
    }

    public function compose(View $view)
    {
        $view->with('data', $this->data);
    }
}