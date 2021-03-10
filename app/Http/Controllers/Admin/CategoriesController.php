<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use App\Category;
class CategoriesController extends Controller
{
    //

    public function index()
    {
        # code...
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.categories.index', 
        [
            'categories' => $categories,
        ]);
    }

    public function single($id)
    {
        # code...
        $category = Category::find($id);
        return view('admin.categories.single', 
        [
            'category' => $category,
        ]);
    }
    
    public function create()
    {
        # code...
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        # code...

        $category = new Category;

        
        if($request->hasFile('category_image')){
           //Getting file name with extension
           $fileNameWithExt = $request->file('category_image')->getClientOriginalName();
           //Get just file name
           $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
           //Get just ext
           $extension = $request->file('category_image')->getClientOriginalExtension();
           //Filename to store
           $fileNameToStore = $filename.'_'.time().'.'.$extension;
           //Upload Image
           $path = $request->file('category_image')->storeAs('public/category_images', $fileNameToStore);
           


       }
       else
       {
           $fileNameToStore = 'Null';
       }

       $category->name              = $request->input('name');
       $category->description       = $request->input('description');
       $category->image             = $fileNameToStore;

       $category->save();

       $category->save();
       if($category->save()){
          $request->session()->flash('success', 'Category Saved');
      }
      else{
          $request->session()->flash('errors  ', 'Could not be saved');
      }

      return back();


    }

    public function edit($id)
    {
        # code...
        $category = Category::find($id);
        return view('admin.categories.update', [
            'category' => $category,
        ]);
    }

    public function update(Request $request)
    { $id = $request->input('id');
        $category = Category::where('id', $id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            // 'images' => $request->input('images'),

            // 'city_image' => $request->input('city_image'),  
        ]);

  
            
            $request->session()->flash('success', 'Category Saved');
      
            $request->session()->flash('errors  ', 'Could not be saved');
        



        return view('admin.dashboard');

    }

    public function delete(Request $request, $id)
    {
        # code...
        $categories = Category::orderBy('id', 'desc')->get();
        $category = Category::find($id)->delete();
        return view('admin.categories.index', [
            'categories' => $categories,
        ]);
    }

}
