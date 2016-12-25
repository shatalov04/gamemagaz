<?php
/**
 * Created by PhpStorm.
 * User: Maxim
 * Date: 17.12.2016
 * Time: 23:23
 */

namespace App\Repositories;

use App\Admin;
use Illuminate\Support\Facades\Auth;

class AdminRepository
{
    public function getCurrent()
    {
        $user=Auth::user();
        $admin = Admin::where('user_id',$user->id)->first();
        return $admin;
    }


}