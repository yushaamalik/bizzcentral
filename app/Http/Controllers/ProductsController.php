<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
class ProductsController extends Controller
{
    //

    public function index()
    {
        # code...
        $products = Product::orderBy('id', 'desc')->get();
        return view('products.index', 
        [
            'products' => $products,
        ]);
    }

    public function single($id)
    {
        # code...
        $product = Product::find($id);
        $relatedProducts = Product::where('category_id', $product->category_id)->take(3)->inRandomOrder()->get();
        // return $relatedProducts;
        return view('products.single',
        [
            'product'          => $product,
            'relatedProducts' => $relatedProducts,
        ]);
    }
}
