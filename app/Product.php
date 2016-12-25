<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }
    public function order_data()
    {
        return $this->hasMany('App\OrderData');
    }

}
