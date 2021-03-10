<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use App\Category;

class OrdersController extends Controller
{
    //
    public function index($id)
    {
        # code...

        $product = Product::find($id);
        return view('orders.index', 
        [
            'product' => $product,
        ]);

    }

    public function store(Request $request)
    {
        # code...
        $order = new Order;

        $order->product_id          = $request->input('product_id');
        $order->first_name          = $request->input('first_name');
        $order->last_name           = $request->input('last_name');
        $order->contact_no          = $request->input('contact_no');
        $order->body                = $request->input('body');
        
        $order->save();

        if($order->save()){
            $request->session()->flash('success');
        }
        else{
            $request->session()->flash('errors');
        }
        return back();
    }
}
