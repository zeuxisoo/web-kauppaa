<?php
namespace App\Api\Version1\Controllers;

use Illuminate\Http\Request;
use App\Api\Version1\Bases\ApiController;
use App\Api\Version1\Requests\SignUpRequest;
use App\Api\Version1\Repositories\UserRepository;
use App\Api\Version1\Transformers\UserTransformer;

class HomeController extends ApiController {

    protected $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function signup(SignUpRequest $request) {
        $input = $request->only('username', 'email', 'password');
        $user  = $this->userRepository->create($input);

        return $this->response->item($user, new UserTransformer);
    }

}
