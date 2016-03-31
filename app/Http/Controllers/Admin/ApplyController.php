<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminApplyUpdateRequest;
use App\Repositories\UserRepository;
use App\Repositories\ApplyRepository;
use App\Repositories\FinancierApplicationRepository;

class ApplyController extends Controller {

    private $userRepository;
    private $applyRepository;
    private $financierApplicationRepository;

    private $status = ['waiting', 'reviewing', 'published', 'matched', 'approved', 'completed', 'rejected'];

    public function __construct(UserRepository $userRepository, ApplyRepository $applyRepository, FinancierApplicationRepository $financierApplicationRepository) {
        $this->userRepository                 = $userRepository;
        $this->applyRepository                = $applyRepository;
        $this->financierApplicationRepository = $financierApplicationRepository;
    }

    public function manage($status) {
        $applies = $this->applyRepository->findAllAppliesByStatusWithPaginate($status);

        return view('admin/apply/manage', compact('status', 'applies'));
    }

    public function show($id) {
        $apply  = $this->applyRepository->findApplyById($id);
        $photos = $apply->photos;

        $investment = $this->financierApplicationRepository->findByApplyId($id);
        $financier  = $this->userRepository->findById($investment->user_id);

        return view('admin/apply/show', compact('apply', 'photos', 'financier'));
    }

    public function edit($id) {
        $apply  = $this->applyRepository->findApplyById($id);
        $photos = $apply->photos;
        $status = $this->status;

        $investment = $this->financierApplicationRepository->findByApplyId($id);
        $financier  = $this->userRepository->findById($investment->user_id);

        return view('admin/apply/edit', compact('apply', 'photos', 'status', 'financier'));
    }

    public function update(AdminApplyUpdateRequest $request, $id) {
        $input        = $request->only('status');
        $financier_id = $request->input('financier_id');
        $apply        = $this->applyRepository->findApplyById($id);

        $this->applyRepository->updateApplyById($id, $input);

        if (in_array($input['status'], ['published', 'matched', 'rejected', 'approved', 'completed']) === true) {
            $this->financierApplicationRepository->updateByFinancierIdAndApplyId($financier_id, $apply->id, $input);
        }

        return redirect()->back()->withNotice('Record was updated');
    }

}
