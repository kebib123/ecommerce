<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
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

    public function login_page(Request $request)
    {
        if ($request->isMethod('get'))
        {
            return view('frontend.pages.account-signin');
        }


    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            $email = $request->email;
            $password = $request->password;

            $remember = $request->has('remember') ? true : false;

            if (Auth::attempt(['email' => $email, 'password' => $password],$remember)) {
                if (Auth::user()->verified == '1' && Auth::user()->roles == 'user') {
                    return redirect()->route('index')->with('success', 'Logged in');
                }
                if (Auth::user()->verified == '1' && Auth::user()->roles == 'admin')  {
                    return redirect()->route('dashboard')->with('success', 'Welcome to Dashboard');
                }

                if (Auth::user()->verified == '0') {
                    Auth::logout();
                    return back()->with('error', 'Please verify first');
                }
            } else {
                return back()->with('error', 'Please register first');
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->intended(route('login-page'));
    }
}
