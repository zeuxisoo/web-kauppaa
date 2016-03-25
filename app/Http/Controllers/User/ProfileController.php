<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserProfileUpdateRequest;
use App\Repositories\UserRepository;

class ProfileController extends Controller {

    public function __construct(UserRepository $userRepository) {
        $this->user           = auth()->user();
        $this->userRepository = $userRepository;
    }

    public function index() {
        $user         = $this->user;
        $user_applies = $user->applies;

        return view('user/profile/index', compact('user', 'user_applies'));
    }

    public function edit() {
        $user = $this->user;

        return view('user/profile/edit', compact('user'));
    }

    public function update(UserProfileUpdateRequest $request) {
        $input = $request->only('username', 'email');

        $data = [];
        if (empty($input['username']) === false) {
            $data['username'] = $input['username'];
        }

        if (empty($input['email']) === false) {
            $data['email'] = $input['email'];
        }

        $this->userRepository->updateMyProfile($this->user->id, $data);

        return redirect()->back()->withNotice('Profile updated');
    }

}
