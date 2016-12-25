<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Gloudemans\Shoppingcart\Facades\Cart;


class HeaderComposer
{

    protected $cart;

    public function __construct()
    {
        // Dependencies automatically resolved by service container...
        $this->cart = Cart::content();
    }

    public function compose(View $view)
    {
        $view->with('cart', $this->cart);
    }
}