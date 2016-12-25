<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\ProductRepository;


class OurProductsComposer
{

    protected $data;

    public function __construct(ProductRepository $products)
    {
        // Dependencies automatically resolved by service container...
        $this->data['products'] = $products->getRandomThree();
    }

    public function compose(View $view)
    {
        $view->with('data', $this->data);
    }
}