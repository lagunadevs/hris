<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/admin/manager/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        if (auth()->attempt(['email' => request('email'), 'password' => request('password')])) {
           $user = auth()->user();

            if (auth()->user()->status) {
                $data['message'] = config('message.login_success');

                if (auth()->user()->hasRole('Admin')) {
                    return redirect()->route('login');
                } 
            } else {
                $message = config('message.account_deactivated');
                session()->flash('message', $message);
                return redirect()->back();
            }
        } else {
            // return 'test';
            $message = config('message.invalid_credentials');
            session()->flash('message', $message);
            return redirect()->back();
        }
    }
}
