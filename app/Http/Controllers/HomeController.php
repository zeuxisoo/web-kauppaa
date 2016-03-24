<?php
namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\SignUpRequest;
use App\Repositories\UserRepository;

class HomeController extends Controller {

    protected $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

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

    public function signup() {
        return view('home/signup');
    }

    public function doSignup(SignUpRequest $request) {
        $input = $request->only('username', 'password', 'email');
        $user  = $this->userRepository->create($input);

        return redirect(route('web.home.index'))->withNotice('Account Created');
    }

    public function signout() {
        Auth::logout();

        return redirect(route('web.home.index'));
    }

}
