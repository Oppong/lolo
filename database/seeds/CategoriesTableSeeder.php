<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        Category::insert([

            'name' => 'Skirts',

        ]);

          Category::insert([

            'name' => 'Tops',

        ]);
    }
}
