<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Repositories\ApplyRepository;

class ApplyController extends Controller {

    public function __construct(ApplyRepository $applyRepository) {
        $this->user            = auth()->user();
        $this->applyRepository = $applyRepository;
    }

    public function show($id) {
        $apply  = $this->applyRepository->findMyApplyById($this->user->id, $id);
        $photos = $apply->photos;

        return view('user/home/show', compact('apply', 'photos'));
    }

}
