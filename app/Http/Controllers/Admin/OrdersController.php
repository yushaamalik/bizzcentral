<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
use App\Order;
class OrdersController extends Controller
{
    //
    public function index()
    {
        # code...
        $orders = Order::orderBy('id', 'desc')->get();
        return view('admin.orders.index',
        [
            'orders' => $orders,
        ]);
    }
}
