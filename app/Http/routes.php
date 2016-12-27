<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages/index');
});

Route::auth();


Route::get('/samples/news/single', 'SampleController@singlenews');
Route::get('/samples/news/list', 'SampleController@listnews');
Route::get('/samples/about', 'SampleController@about');
Route::get('/samples/product/single', 'SampleController@singleproduct');
Route::get('/samples/category', 'SampleController@category');
Route::get('/samples/cart/step1', 'SampleController@cartstep1');
Route::get('/samples/cart/step2', 'SampleController@cartstep2');
Route::get('/samples/cart/step3', 'SampleController@cartstep3');

// Routes

// User group
//Route::group(['middleware' => 'auth'], function () {
Route::get('home', 'HomeController@index')->name('home');
Route::get('about', 'AboutController@index')->name('about');
Route::get('articles', 'ArticleController@index')->name('articles');
Route::get('articles/{id}', 'ArticleController@show')->name('article');

Route::get('products/{id}', 'ProductController@show')->name('products.show');
Route::post('products/search', 'ProductController@search')->name('products.search');

Route::get('categories/{id}', 'CategoryController@show')->name('categories.show');

Route::get('cart/add/{id}', 'CartController@add')->name('cart.add');
Route::get('cart/delete/{id}', 'CartController@delete')->name('cart.delete');
Route::get('cart/show', 'CartController@show')->name('cart.show');
Route::get('cart/order', 'CartController@order')->name('cart.order');
Route::post('order/store', 'OrderController@store')->name('order.store');


//});


Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('admin', 'DashboardController@index')->name('dashboard');
    Route::get('admin/orders', 'DashboardController@orders')->name('dashboard.orders');
    Route::put('admin/email', 'DashboardController@changeEmail')->name('dashboard.email');

    //Route::resource('products', 'ProductController');
    // Products
    Route::get('products', 'ProductController@index')->name('products.index');
    Route::get('products/create/{category_id}', 'ProductController@create')->name('products.create');
    Route::post('products/{category_id}', 'ProductController@store')->name('products.store');

    Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
    Route::put('products/{id}', 'ProductController@update')->name('products.update');
    Route::get('products/destroy/{id}', 'ProductController@destroy')->name('products.destroy');

    //Route::resource('categories', 'CategoryController');
    // Categories
    Route::get('categories', 'CategoryController@index')->name('categories.index');
    Route::get('categories/create', 'CategoryController@create')->name('categories.create');
    Route::post('categories', 'CategoryController@store')->name('categories.store');
    Route::get('categories/{id}/edit', 'CategoryController@edit')->name('categories.edit');
    Route::put('categories/{id}', 'CategoryController@update')->name('categories.update');
    Route::get('categories/destroy/{id}', 'CategoryController@destroy')->name('categories.destroy');
});

// Composers

View::composer('layouts.partials.sidebar', 'App\Http\ViewComposers\SidebarComposer');
View::composer('layouts.partials.footer', 'App\Http\ViewComposers\FooterComposer');
View::composer('layouts.partials.header', 'App\Http\ViewComposers\HeaderComposer');
View::composer('layouts.partials.last_products', 'App\Http\ViewComposers\LastProductsComposer');
View::composer('layouts.partials.our_products', 'App\Http\ViewComposers\OurProductsComposer');
View::composer('layouts.dashboard.email_form', 'App\Http\ViewComposers\EmailFormComposer');