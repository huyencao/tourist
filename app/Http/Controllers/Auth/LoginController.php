<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $user = Auth::user();
            if ($user->role == 1) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('homeTourist');
            }
        }

    }

    public function username()
    {
        $loginType = request()->username;
        $this->username = filter_var($loginType, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$this->username => $loginType]);

        return property_exists($this, 'username') ? $this->username : 'email';
    }
}
