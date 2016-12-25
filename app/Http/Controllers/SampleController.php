<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SampleController extends Controller
{
    public function singlenews()
    {
        return view('samples.news.single');
    }
    public function listnews()
    {
        return view('samples.news.list');
    }
    public function about()
    {
        return view('samples.about');
    }

    public function singleproduct()
    {
        return view('samples.product.single');
    }
    public function category()
    {
        return view('samples.category.category');
    }
    public function cartstep1()
    {
        return view('samples.cart.step1');
    }
    public function cartstep2()
    {
        return view('samples.cart.step2');
    }
    public function cartstep3()
    {
        return view('samples.cart.step3');
    }
}
