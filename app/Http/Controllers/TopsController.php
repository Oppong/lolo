<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Category;

class TopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $category = Category::find(2);

         $products = $category->products()->inRandomOrder()->get();

        return view('pages.tops', compact('category', 'products'));
    }

   
}
