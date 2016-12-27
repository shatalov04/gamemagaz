<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Http\Requests;
use Sofa\Eloquence\Eloquence;


class ProductController extends Controller
{
    protected $data;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($category_id)
    {
        $category = Category::find($category_id);
        $data['category'] = $category;
        return view('pages.dashboard.products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $category_id)
    {
        $this->validate($request, [
            'price' => 'required|integer',
            'name' => 'required|min:5',
            'photo' => 'image|max:40',
            'description' => 'required|min:150',
        ]);
        $product = new Product();
        if ($request->file('photo')) {
            $product->save();
            $filename = "game-$product->id.jpg";
            $directory = "img\\cover\\";
            $product->photo = "\\" . $directory . $filename;
            //dd($directory);
            $request->file('photo')->move($directory, $filename);
        }
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $category_id;
        //dd($product);
        $product->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        //dd($product);
        if ($product == null) {
            return back();
        } else {
            $this->data['product'] = $product;
            //$this->data['category']=$product->category();
            return view('pages.product.single', $this->data);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $data['product'] = $product;
        return view('pages.dashboard.products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'price' => 'required|integer',
            'name' => 'required|min:5',
            'photo' => 'image|max:40',
            'description' => 'required|min:150',
        ]);
        $product = Product::find($id);
        if ($request->file('photo')) {
            $filename = "game-$id.jpg";
            $directory = "img\\cover\\";
            $product->photo = "\\" . $directory . $filename;
            //dd($directory);
            $request->file('photo')->move($directory, $filename);
        }
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return back();
    }


    public function search(Request $request)
    {
        $products = Product::search($request->search)
            ->paginate(6);
        //dd($product);
        if ($products == null) {
            return back();
        } else {
            $this->data['products'] = $products;
            //$this->data['category']=$product->category();
            return view('pages.product.search', $this->data);
        }
    }
}
