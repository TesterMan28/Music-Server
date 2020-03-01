<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Create a new controller instance.
     * Overwrites Login method
     * @return void
     */
    // Credit to: https://www.itsolutionstuff.com/post/laravel-6-auth-login-with-username-or-email-tutorialexample.html
    /*
    public function login(Request $request) {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
            'ic_number' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'], 'ic_number' => $input['ic_number']))) {
            return redirect()->action('DashboardController@index');
        } else {
            return redirect()->route('login')
                ->with('error', 'Invalid Credentials');
        }
    }
    */
}
