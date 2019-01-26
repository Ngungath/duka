<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $product1 = [
         
         'name'=>'iphone 6',
         'image'=>'uploads/products/iphone6.jpg',
         'price'=>'8000000',
         'description'=>'This holiday season, we at (company’s name) pause and take advantage of the season to express our gratitude and appreciation to you for doing business with us. Wishing you a year full of happiness and success.'
         
        ];

        $product2 = [
         
         'name'=>'iphone x',
         'image'=>'uploads/products/iphonex.jpg',
         'price'=>'1800000',
         'description'=>'This holiday season, we at (company’s name) pause and take advantage of the season to express our gratitude and appreciation to you for doing business with us. Wishing you a year full of happiness and success.'
         
        ];


        Product::create($product1);
        Product::create($product2);
    }
}
