<?php
namespace App\Http\Controllers\User;

use Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserProfileUpdateProfileRequest;
use App\Http\Requests\UserProfileUpdatePasswordRequest;
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

    public function editProfile() {
        $user = $this->user;

        return view('user/profile/edit_profile', compact('user'));
    }

    public function updateProfile(UserProfileUpdateProfileRequest $request) {
        $input = $request->only('username', 'email');
        $data  = [];

        if (empty($input['username']) === false) {
            $data['username'] = $input['username'];
        }

        if (empty($input['email']) === false) {
            $data['email'] = $input['email'];
        }

        if (empty($data) === false) {
            $this->userRepository->updateMyProfile($this->user->id, $data);
        }

        return redirect()->back()->withNotice('Profile updated');
    }

    public function editPassword() {
        return view('user/profile/edit_password');
    }

    public function updatePassword(UserProfileUpdatePasswordRequest $request) {
        $input = $request->only('old_password', 'new_password');

        if (Hash::check($input['old_password'], $this->user->password) === false) {
            return redirect()->back()->withErrors([
                'old_password' => 'The old password does not match',
            ]);
        }else{
            $this->userRepository->updateMyPassword($this->user->id, [
                'password' => Hash::make($input['new_password'])
            ]);

            return redirect()->back()->withNotice('Password updated');
        }
    }

}
