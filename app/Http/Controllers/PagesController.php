<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class PagesController extends Controller
{
    public function index() {

    	$products = Product::inRandomOrder()->take(4)->get();

    	return view('index', compact('products'));
    }
}
