<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Admin;

class ProductsController extends Controller
{
    //

    public function index()
    {
        # code...
        $products = Product::orderBy('id', 'desc')->get();
        return view('admin.products.index', 
        [
            'products' => $products,
        ]);
    }

    public function single($id)
    {
        # code...
        $product = Product::find($id);
        return view('admin.products.single', 
        [
            'product' => $product,
        ]);
    }

    public function create()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.products.create',
        [
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        # code...

        $product = new Product;

        if($request->hasFile('product_image')){
            //Getting file name with extension
            $fileNameWithExt = $request->file('product_image')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('product_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('product_image')->storeAs('public/product_images', $fileNameToStore);
            
 
 
        }
        else
        {
            $fileNameToStore = 'Null';
        }

        $product->category_id   = $request->input('category_id');
        $product->name          = $request->input('name');
        $product->sku           = $request->input('sku');
        $product->description   = $request->input('description');
        $product->images        = $fileNameToStore;
        $product->price         = $request->input('price');

        $product->save();
        
        if($product->save()){
            $request->session()->flash('success', 'Product Saved');
        }
        else{
            $request->session()->flash('errors  ', 'Could not be saved');
        }

        return back();
    }

    public function edit($id)
    {
        # code...
        $product = Product::find($id);
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.products.update', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function update(Request $request)
    { $id = $request->input('id');
        $product = Product::where('id', $id)->update([
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'sku' => $request->input('sku'),
            'description' => $request->input('description'),
            // 'images' => $request->input('images'),

            // 'city_image' => $request->input('city_image'),  
        ]);

  
            
            $request->session()->flash('success', 'Product Saved');
      
            $request->session()->flash('errors  ', 'Could not be saved');
        

        $products = Product::orderBy('id', 'desc')->get();


        return view('admin.dashboard');

    }
    public function delete(Request $request, $id)
    {
        # code...
        $products = Product::orderBy('id', 'desc')->get();
        $product = Product::find($id)->delete();
        return view('admin.products.index', [
            'products' => $products,
        ]);
    }
}
