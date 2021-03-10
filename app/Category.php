<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Category;

class Category extends Model
{
    //

    public function product()
    {
        # code...
        return $this->hasMany('App\Product');
    }
}
