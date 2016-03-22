<?php
namespace App\Api\Version1\Controllers;

use Illuminate\Http\Request;
use App\Api\Version1\Bases\ApiController;

class HomeController extends ApiController {

    public function signup(Request $request) {
        return $this->response->array([
            'token' => "testing"
        ]);
    }

}
