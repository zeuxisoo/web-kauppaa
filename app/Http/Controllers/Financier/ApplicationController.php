<?php
namespace App\Http\Controllers\Financier;

use Auth;
use App\Http\Controllers\Controller;
use App\Repositories\ApplyRepository;
use App\Repositories\FinancierApplicationRepository;

class ApplicationController extends Controller {

    protected $applyRepository;
    protected $financierApplicationRepository;

    public function __construct(ApplyRepository $applyRepository, FinancierApplicationRepository $financierApplicationRepository) {
        $this->user                           = Auth::user();
        $this->applyRepository                = $applyRepository;
        $this->financierApplicationRepository = $financierApplicationRepository;
    }

    public function index() {
        $applies = $this->applyRepository->findAllAppliesByStatusWithPaginate('published');

        return view('financier/application/index', compact('applies'));
    }

    public function matched() {
        $user_id     = $this->user->id;
        $investments = $this->financierApplicationRepository->findMyMatchedApplicationsWithPaginate($user_id);

        return view('financier/application/matched', compact('investments'));
    }

    public function approved() {
        return view('financier/application/approved');
    }

    public function show($id) {
        $user_id    = $this->user->id;
        $apply      = $this->applyRepository->findApplyById($id);
        $investment = $this->financierApplicationRepository->findByUserIdAndApplyId($user_id, $id);

        return view('financier/application/show', compact('apply', 'investment'));
    }

    public function investment($id) {
        $user_id    = $this->user->id;
        $investment = $this->financierApplicationRepository->findByUserIdAndApplyId($user_id, $id);

        if ($investment !== null) {
            return redirect()->back()->withErrors([
                'error' => trans('financier.application.investment.error.apply_already_matched')
            ]);
        }else{
            $apply = $this->applyRepository->findApplyById($id);

            $this->financierApplicationRepository->create([
                'user_id'  => $this->user->id,
                'apply_id' => $apply->id,
            ]);

            $this->applyRepository->updateApplyById($id, [
                'status' => 'matched',
            ]);

            return redirect()->back()->withNotice(trans('financier.application.investment.success.apply_matched'));
        }
    }

}
