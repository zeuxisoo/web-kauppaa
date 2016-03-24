<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Repositories\ApplyRepository;

class HomeController extends Controller {

    public function __construct(ApplyRepository $applyRepository) {
        $this->user            = auth()->user();
        $this->applyRepository = $applyRepository;
    }

    public function index() {
        $applies = $this->applyRepository->findMyApplies($this->user->id);

        return view('user/home/index', compact('applies'));
    }

}
