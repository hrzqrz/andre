<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomorder()->take(25)->get();
        return view('welcome')->with('products', $products);
    }

}
