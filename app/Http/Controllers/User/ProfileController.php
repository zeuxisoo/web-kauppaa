<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class ProfileController extends Controller {

    public function __construct() {
        $this->user = auth()->user();
    }

    public function index() {
        $user         = $this->user;
        $user_applies = $user->applies;

        return view('user/profile/index', compact('user', 'user_applies'));
    }

}
