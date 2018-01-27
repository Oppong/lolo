<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Category;

class SkirtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
         $category = Category::findOrFail(1);

          $products = $category->products()->inRandomOrder()->get();

        return view('pages.skirts', compact('category', 'products'));
      
        //$products = Product::inRandomOrder()->take(8)->get();

       // return view('pages.skirts', compact('products'));
    }

   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //

        $product = Product::where('slug', '=', $slug)->firstOrFail();

        $mights = Product::where('slug', '!=', $slug)->inRandomOrder()->take(4)->get();

        return view('pages.show', compact('product', 'mights'));
    }

   
}
