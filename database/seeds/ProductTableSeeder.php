<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagePath' => 'http://picture-cdn.wheretoget.it/rq8aws-l-610x610-shoes-nike-snickers.jpg',
        	'title' => 'Snicker 1',
        	'description' => 'Best delivery and supplies in time of demand',
        	'price' => 15000
        ]);

        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://s-media-cache-ak0.pinimg.com/736x/11/d9/e5/11d9e5284e263eec9fa56e5570d49ac1--adidas-originals-sneakers.jpg',
        	'title' => 'Snicker 2',
        	'description' => 'Best delivery and supplies in time of demand',
        	'price' => 10000
        ]);

        $product->save();
             $product = new \App\Product([
        	'imagePath' => 'https://ae01.alicdn.com/kf/HTB1S.xqQXXXXXcmXFXXq6xXFXXXB/2017-Casual-font-b-Shoes-b-font-font-b-Women-b-font-Wedge-High-Heel-Boots.jpg',
        	'title' => 'Snicker 3',
        	'description' => 'Best delivery and supplies in time of demand',
        	'price' => 25000
        ]);

        $product->save();
             $product = new \App\Product([
        	'imagePath' => 'https://ae01.alicdn.com/kf/HTB1QfXQHVXXXXbXXXXXq6xXFXXXH/2015-New-Women-Sneakers-Camouflage-Rivet-Tenis-Shoes-Woman-Increasing-Heel-Fashion-Snickers-PU-Leather-Outdoor.jpg',
        	'title' => 'Snicker 4',
        	'description' => 'Best delivery and supplies in time of demand',
        	'price' => 15000
        ]);

        $product->save();
             $product = new \App\Product([
        	'imagePath' => 'http://i.ebayimg.com/00/s/NTAwWDUwMA==/z/3eoAAOxyVaBS-rpO/$_3.JPG?set_id=2',
        	'title' => 'Snicker 5',
        	'description' => 'Best delivery and supplies in time of demand',
        	'price' => 20000
        ]);

        $product->save();
             $product = new \App\Product([
        	'imagePath' => 'https://rukminim1.flixcart.com/image/1408/1408/j4eha4w0/shoe/k/7/m/883-11-kraasa-black-original-imaev3zytdwdw854.jpeg?q=90',
        	'title' => 'Snicker 6',
        	'description' => 'Best delivery and supplies in time of demand',
        	'price' => 10000
        ]);

        $product->save();
    }
}
