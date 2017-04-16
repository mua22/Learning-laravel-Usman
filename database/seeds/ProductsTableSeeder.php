<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<25;$i++){
            $product = new Product();
            $product->title = "My Product $i";
            $product->slug = "my-product-$i";
            $product->price = rand(500,1000);
            $product->description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis dolor doloremque expedita obcaecati tempora! Molestias optio quam soluta voluptas voluptate. Amet consectetur corporis dignissimos dolore doloribus laborum temporibus vel voluptatum.";
            $product->save();
        }
    }
}
