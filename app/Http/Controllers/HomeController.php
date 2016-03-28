<?php
namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Http\Requests\SignUpRequest;
use App\Repositories\UserRepository;
use App\Repositories\NewsRepository;
use App\Repositories\RoleRepository;

class HomeController extends Controller {

    protected $userRepository;
    protected $roleRepository;
    protected $newsRepository;

    public function __construct(UserRepository $userRepository, RoleRepository $roleRepository, NewsRepository $newsRepository) {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
        $this->newsRepository = $newsRepository;
    }

    public function index() {
        $news = $this->newsRepository->findAllWithSimplePaginate();

        return view('home/index', compact('news'));
    }

    public function signin() {
        return view('home/signin');
    }

    public function doSignin(Request $request) {
        $input = $request->only('username', 'password');
        $remember = $request->only('remember');

        if ($a = Auth::attempt($input, $remember) == true) {
            return redirect(route(homePage()));
        }else{
            return redirect()->back()->withInput()->withErrors([
                'email' => trans('home.signin.error.invalid_credentials'),
            ]);
        }
    }

    public function signup() {
        return view('home/signup');
    }

    public function doSignup(SignUpRequest $request) {
        $input             = $request->only('username', 'password', 'email');
        $input['password'] = Hash::make($input['password']);

        $role_name = $request->input('role');
        $role      = $this->roleRepository->findByName($role_name);

        $user  = $this->userRepository->create($input, $role);

        return redirect(route('web.home.index'))->withNotice(trans('home.signup.success.account_created'));
    }


    public function signout() {
        Auth::logout();

        return redirect(route('web.home.index'));
    }

}
