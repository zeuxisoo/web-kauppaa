<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class CheckForUserRole {

    protected $auth;

    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next, $roles) {
        if ($this->auth->guest() || !$request->user()->hasRole(explode('|', $roles))) {
            return redirect(route('web.home.index'));
        }

        return $next($request);
    }

}
