<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Repositories\ApplyRepository;

class ApplyController extends Controller {

    public function __construct(ApplyRepository $applyRepository) {
        $this->user            = auth()->user();
        $this->applyRepository = $applyRepository;
    }

    public function index() {
        $applies = $this->applyRepository->findMyApplies($this->user->id);

        return view('user/apply/index', compact('applies'));
    }

    public function create() {
        return view('user/apply/create');
    }

    public function show($id) {
        $apply  = $this->applyRepository->findMyApplyById($this->user->id, $id);
        $photos = $apply->photos;

        return view('user/apply/show', compact('apply', 'photos'));
    }

}
