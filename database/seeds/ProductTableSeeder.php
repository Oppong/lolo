<?php

use Illuminate\Database\Seeder;

use App\Product;

use App\Category; 

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Product::create([

    		'name' => 'Shirt 566',
    		'slug' => 'd2',
    		'details' => 'a short description of the product',
    		'price' => 20,
    		'description' => ' a long description about the product to sell'
            'category_id' => 1,

    	]);

    	Product::create([

    		'name' => 'Shirt tf2',
    		'slug' => 'sh4',
    		'details' => 'a short description of the product',
    		'price' => 30,
    		'description' => ' a long description about the product to sell'
            'category_id' => 2,
    	]);


    	Product::create([

    		'name' => 'Shoe',
    		'slug' => 'shirt1',
    		'details' => 'a short description of the product',
    		'price' => 40,
    		'description' => ' a long description about the product to sell'
            'category_id' => 1,
    	]);


    	Product::create([

    		'name' => 'Shoe 24',
    		'slug' => 'hb4',
    		'details' => 'a short description of the product',
    		'price' => 80,
    		'description' => ' a long description about the product to sell'
            'category_id' => 1,
    	]);


    	Product::create([

    		'name' => 'Shoe 6',
    		'slug' => 'shirt2',
    		'details' => 'a short description of the product',
    		'price' => 120,
    		'description' => ' a long description about the product to sell'
            'category_id' => 2,
    	]);


    	Product::create([

    		'name' => 'Shoe lj',
    		'slug' => 'hb1',
    		'details' => 'a short description of the product',
    		'price' => 120,
    		'description' => ' a long description about the product to sell'
            'category_id' => 2,
    	]);


    	Product::create([

    		'name' => 'Shoe nm',
    		'slug' => 'hb3',
    		'details' => 'a short description of the product',
    		'price' => 120,
    		'description' => ' a long description about the product to sell'
            'category_id' => 2,
    	]);


    	Product::create([

    		'name' => 'Shoe wd',
    		'slug' => 'd1',
    		'details' => 'a short description of the product',
    		'price' => 10,
    		'description' => ' a long description about the product to sell'
            'category_id' => 1,
    	]);

    }
}
