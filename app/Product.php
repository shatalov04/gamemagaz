<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model

{
    use SearchableTrait;

    /* Searchable rules.
    *
    * @var array
    */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'products.name' => 10,
            'products.description' => 9,
            'categories.name' => 2,
            'categories.description' => 1,
        ],
        'joins' => [
            'categories' => ['categories.id','products.category_id'],
        ],
    ];

    public function category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }
    public function order_data()
    {
        return $this->hasMany('App\OrderData');
    }

}
