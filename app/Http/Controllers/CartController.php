<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests;
use Debugbar;

class CartController extends Controller
{
    protected $data;

    public function add($id)
    {
        $product = Product::find($id);
        // Get cart items
        $items = Cart::content();
        // Update quantity if exists
        foreach ($items as $item) {
            if ($item->id == $product->id) {

                Cart::update($item->rowId, $item->qty + 1);
                Debugbar::info(Cart::content());
                //dd(Cart::content());
                return back();
            }
        }
        // Add new item
        Cart::add(array('id' => $product->id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price))
            ->associate('App\Product');
        return back();
//      return view('cart', array('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }

    public function show()
    {
        $cart = Cart::content();
        $this->data['cart'] = $cart;
        return view('pages.cart.show', $this->data);
    }
    public function order()
    {
        $cart = Cart::content();
        $this->data['cart'] = $cart;
        return view('pages.cart.order', $this->data);
    }

    public function delete($id)
    {
        $items = Cart::content();
        // Update quantity if exists
        foreach ($items as $item) {
            if ($item->id == $id) {
                Cart::remove($item->rowId);
                Debugbar::info(Cart::content());
                //dd(Cart::content());
                return back();
            }
        }
    }
}