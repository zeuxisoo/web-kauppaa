<?php
namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ApplyRepository;

class DashboardController extends Controller {

    public function __construct(ApplyRepository $applyRepository) {
        $this->user            = auth()->user();
        $this->applyRepository = $applyRepository;
    }

    public function index() {
        $applies = $this->applyRepository->findAllApplies();

        return view('admin/dashboard/index', compact('applies'));
    }

    public function show($id) {
        $apply  = $this->applyRepository->findApplyById($id);
        $photos = $apply->photos;

        return view('admin/dashboard/show', compact('apply', 'photos'));
    }

    public function edit($id) {
        $apply  = $this->applyRepository->findApplyById($id);

        return view('admin/dashboard/edit', compact('apply'));
    }

    public function update(Request $request, $id) {
        $input = $request->only('status');
        $apply = $this->applyRepository->updateApplyById($id, $input);

        return redirect()->back()->withNotice('Record was updated');
    }

}
