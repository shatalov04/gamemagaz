<?php

namespace App\Http\Controllers;

use App\OrderData;
use Illuminate\Http\Request;
use App\Category;
use App\Order;
use App\Product;
use App\Admin;
use App\Http\Requests;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        if ($categories == null) {
            return back();
        } else {
            $data['categories'] = $categories;
            //$data['products']=$categories->products();
            return view('pages.dashboard.dashboard', $data);
        }
    }

    public function orders()
    {
        $orders = Order::all();
        if ($orders == null) {
            return back();
        } else {
            foreach ($orders as $order) {
                $items = OrderData::leftjoin('products', 'order_datas.product_id', '=', 'products.id')
                    ->where('order_id', $order->id)
                    ->get();
                $order['items'] = $items;
            }
            $data['orders'] = $orders;
            //$data['products']=$categories->products();
            return view('pages.dashboard.orders', $data);
        }
    }

    public function changeEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
        ]);
        $product = Admin::find($request->id);
        $product->email = $request->email;
        $product->save();
        return back();
    }
}
