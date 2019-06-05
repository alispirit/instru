<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function user_type(){
        $user = Auth::user();


    }
    /*
     * redirect user by type after login
     * */
    public function redirectTo(){

        // User role
        $type = Auth::user()->type;
//        var_dump($role['type']);die();

        // Check user role
        var_dump();

        switch ($type) {
            case User::superadmin :
                return '/dashboard';
                break;
            case User::admin :
                return '/dashboard';
                break;
            default:
                return '/home';
                break;
        }
    }
}
