<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ApplyRepository;

class PanelController extends Controller {

    public function __construct(ApplyRepository $applyRepository) {
        $this->applyRepository = $applyRepository;
    }

    public function index() {
        $user    = auth()->user();
        $applies = $this->applyRepository->findMyApplies($user->id);

        return view('panel/index', compact('applies'));
    }

}
