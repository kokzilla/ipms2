<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Auth;


class AuthController extends Controller {
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

use AuthenticatesAndRegistersUsers,
    ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
                    'name' => 'required|max:255',
                    //'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data) {
        return User::create([
                    'name' => $data['name'],
                    //'email' => $data['email'],
                    'password' => bcrypt($data['password']),
        ]);
    }

    public function postLogin1(Request $request) {
        $this->validate($request, [
            'emp_id' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('emp_id', 'password');

        if ($this->auth->attempt($credentials, $request->has('remember'))) {
            return redirect()->intended($this->redirectPath());
        }

        return redirect($this->loginPath())
                        ->withInput($request->only('emp_id', 'remember'))
                        ->withErrors([
                            'emp_id' => 'These credentials do not match our records.',
        ]);
    }

    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate(Request $request) {
         $credentials = $request->only('emp_id', 'password');
         
        //if (Auth::attempt(['email' => $email, 'password' => $password])) {
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('home');
        } else {
            return redirect()->intended('/')->withErrors([
                    'username' => 'These credentials do not match our records.',
                ]);
        }
    }

}
