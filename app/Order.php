<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;
use App\Product;
use App\Category;

class Order extends Model
{
    //
    public function product()
    {
        # code...
        return $this->belongsTo('App\Product');
    }

}
