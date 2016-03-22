<?php
namespace App\Api\Version1\Controllers;

use Hash;
use JWTAuth;
use JWTException;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Api\Version1\Bases\ApiController;
use App\Api\Version1\Requests\SignUpRequest;
use App\Api\Version1\Requests\SignInRequest;
use App\Api\Version1\Repositories\UserRepository;
use App\Api\Version1\Transformers\UserTransformer;

class HomeController extends ApiController {

    protected $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function signup(SignUpRequest $request) {
        $input             = $request->only('username', 'email', 'password');
        $input['password'] = Hash::make($input['password']);

        $user = $this->userRepository->create($input);

        return $this->response->item($user, new UserTransformer);
    }

    public function signin(SignInRequest $request) {
        $input = $request->only('username', 'password');

        try {
            $token = JWTAuth::attempt($input);

            if (!$token) {
                throw new AccessDeniedHttpException('Invalid credentials');
            }
        } catch (JWTException $e) {
            throw new HttpException('Could not create token');
        }

        return $this->response->array([
            'token' => $token
        ]);
    }

}
