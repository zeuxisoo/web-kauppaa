<?php
namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ApplyRepository;

class ApplyController extends Controller {

    private $applyRepository;

    public function __construct(ApplyRepository $applyRepository) {
        $this->applyRepository = $applyRepository;
    }

    public function index() {
        $applies = $this->applyRepository->findAllApplies();

        return view('admin/apply/index', compact('applies'));
    }

    public function show($id) {
        $apply  = $this->applyRepository->findApplyById($id);
        $photos = $apply->photos;

        return view('admin/apply/show', compact('apply', 'photos'));
    }

    public function edit($id) {
        $apply  = $this->applyRepository->findApplyById($id);

        return view('admin/apply/edit', compact('apply'));
    }

    public function update(Request $request, $id) {
        $input = $request->only('status');
        $apply = $this->applyRepository->updateApplyById($id, $input);

        return redirect()->back()->withNotice('Record was updated');
    }

}
