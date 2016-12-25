<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function products()
    {
        return $this->hasMany('App\User');
    }
}
