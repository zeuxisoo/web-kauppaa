<?php
namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ApplyRepository;

class ApplyController extends Controller {

    private $applyRepository;

    private $status = ['waiting', 'reviewing', 'published', 'matched', 'approved', 'completed'];

    public function __construct(ApplyRepository $applyRepository) {
        $this->applyRepository = $applyRepository;
    }

    public function manage($status) {
        $applies = $this->applyRepository->findAllAppliesByStatusWithPaginate($status);

        return view('admin/apply/manage', compact('status', 'applies'));
    }

    public function show($id) {
        $apply  = $this->applyRepository->findApplyById($id);
        $photos = $apply->photos;

        return view('admin/apply/show', compact('apply', 'photos'));
    }

    public function edit($id) {
        $apply  = $this->applyRepository->findApplyById($id);
        $photos = $apply->photos;
        $status = $this->status;

        return view('admin/apply/edit', compact('apply', 'photos', 'status'));
    }

    public function update(Request $request, $id) {
        $input = $request->only('status');
        $apply = $this->applyRepository->updateApplyById($id, $input);

        return redirect()->back()->withNotice('Record was updated');
    }

}
