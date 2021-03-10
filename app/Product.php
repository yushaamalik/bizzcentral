<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Category;
use App\Order;
class Product extends Model
{
    //

    public function category()
    {
        # code...
        return $this->belongsTo('App\Category');
    }

    public function order()
    {
        # code...
        return $this->hasMany('App\Order');
    }
}
