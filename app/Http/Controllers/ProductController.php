<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cart;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use Session;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	return view('shop.index', compact('products'));
    }

    public function addToCart(Request $request, $id){
    	$product = Product::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($product, $product->id);

    	$request->session()->put('cart', $cart);
    	//dd($request->session()->get('cart'));
    	return redirect()->route('product.index');
    }

    public function getCart(){
    	if(!Session::has('cart')){
    		return view('shop.shopping-cart');
    	}

    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);
    	return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function checkout()
    {
    	if(!Session::has('cart')){
    		return view('shop.shopping-cart');
    	}

    	$oldCart = Session::get('cart');
    	$cart = new Cart($oldCart);
    	$total = $cart->totalPrice;
    	return view('shop.checkout', ['total' => $total]);
    }

}
