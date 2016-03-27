<?php
namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller {

    public function index() {
        return view('admin/index');
    }

    public function signin(Request $request) {
        $input = $request->only('username', 'password');
        $remember = $request->only('remember');

        if (Auth::attempt($input, $remember) == true) {
            return redirect(route('web.admin.dashboard.index'));
        }else{
            return redirect()->back()->withInput()->withErrors([
                'email' => 'These credentials do not match our records.',
            ]);
        }
    }

    public function signout() {
        Auth::logout();

        return redirect(route('web.admin.home.index'));
    }

}
