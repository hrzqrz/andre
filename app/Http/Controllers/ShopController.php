<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->take(10)->get();
        return view('pages.shop')->with('products', $products);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $products = Product::inRandomOrder()->take(5)->get();
        return view('pages.product')->with('product', $product)
                                    ->with('products', $products);
    }

    
}
