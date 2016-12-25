<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Order;
use App\OrderData;
use App\Admin;
use App\Http\Requests;
use Gloudemans\Shoppingcart\Facades\Cart;


class OrderController extends Controller
{
    protected $data;

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:5',
            'email' => 'required|email|max:255|',
        ]);
        // Save order info
        $order = new Order();
        $order->username = $request->username;
        $order->email = $request->email;
        $order->save();
        // Save cart items info
        foreach (Cart::content() as $item) {
            $orderData = new OrderData();
            $orderData->order_id = $order->id;
            $orderData->product_id = $item->model->id;
            $orderData->quantity = $item->qty;
            $orderData->save();
            $orders[] = $orderData;
        }
        $this->data['order'] = $order;
        $this->data['orders'] = $orders;
        $this->sendInfo();
        // clear cart
        Cart::destroy();
        return view('pages.index');
    }

    private function sendInfo()
    {
        $admins = Admin::all();
        foreach ($admins as $admin) {
            Mail::send('emails.order_notification', $this->data, function ($m) use ($admin) {
                $m->from('phpls1016@yandex.ru','gamemagaz');
                $m->to($admin->email)->subject("Поступил заказ № {$this->data['order']->id}");
            });
        }

    }
}
