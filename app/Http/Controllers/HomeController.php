<?php
namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller {

    public function index() {
        return view('home/index');
    }

    public function signin(Request $request) {
        if ($request->isMethod('post') === true) {
            $input = $request->only('username', 'password');
            $remember = $request->only('remember');

            if (Auth::attempt($input, $remember) == true) {
                return redirect(route('web.panel.index'));
            }else{
                return redirect()->back()->withInput()->withErrors([
                    'email' => 'These credentials do not match our records.',
                ]);
            }
        }else{
            return view('home/signin');
        }
    }

    public function signout() {
        Auth::logout();

        return redirect(route('web.home.index'));
    }

}
