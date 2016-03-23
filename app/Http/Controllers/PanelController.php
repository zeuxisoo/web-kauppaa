<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ApplyRepository;

class PanelController extends Controller {

    public function __construct(ApplyRepository $applyRepository) {
        $this->user            = auth()->user();
        $this->applyRepository = $applyRepository;
    }

    public function index() {
        $applies = $this->applyRepository->findMyApplies($this->user->id);

        return view('panel/index', compact('applies'));
    }

    public function show($id) {
        $apply  = $this->applyRepository->findMyApplyById($this->user->id, $id);
        $photos = $apply->photos;

        return view('panel/show', compact('apply', 'photos'));
    }

}
