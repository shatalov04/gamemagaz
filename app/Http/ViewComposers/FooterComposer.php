<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\ProductRepository;


class FooterComposer
{

    protected $data;

    public function __construct(ProductRepository $product)
    {
        // Dependencies automatically resolved by service container...
        $this->data['product'] = $product->getRandom();
    }

    public function compose(View $view)
    {
        $view->with('data', $this->data);
    }
}