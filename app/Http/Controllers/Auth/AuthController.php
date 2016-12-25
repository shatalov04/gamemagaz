<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Admin;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = new User();
        if (isset($data['admin']) && ($data['admin'] == 'on')) {
            $role_id = '2';
        } else {
            $role_id = '1';
        }
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->role_id = $role_id;
        $user->password = bcrypt($data['password']);
        $user->save();
        // Add admin info
        if ($role_id == '2') {
            $admin = new Admin();
            $admin->user_id = $user->id;
            $admin->email = $user->email;
            if($admin->save()){
            }
        }
        return $user;
//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'role_id' => $role_id,
//            'password' => bcrypt($data['password']),
//        ]);
    }
}
