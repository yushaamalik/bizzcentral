<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
class CategoriesController extends Controller
{
    //
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        // return $categories;
        return view('category.index', 
        [
            'categories' => $categories,
        ]);
    }

    public function single($id)
    {
        # code...
        $category = Category::find($id);
        $relatedProducts = Product::where('category_id', $category->id)->get();
        // return $relatedProducts;
        return view('category.single',
        [
            'category'          => $category,
            'relatedProducts' => $relatedProducts,
        ]);
    }
}
