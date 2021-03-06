<?php
namespace App\Http\Controllers\User;

use Image;
use Uuid;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserApplyStoreRequest;
use App\Repositories\ApplyRepository;
use App\Repositories\ApplyPhotoRepository;

class ApplyController extends Controller {

    protected $user;
    protected $applyRepository;
    protected $applyPhotoRepository;

    public function __construct(ApplyRepository $applyRepository, ApplyPhotoRepository $applyPhotoRepository) {
        $this->user                 = auth()->user();
        $this->applyRepository      = $applyRepository;
        $this->applyPhotoRepository = $applyPhotoRepository;
    }

    public function index() {
        $applies = $this->applyRepository->findMyApplies($this->user->id);

        return view('user/apply/index', compact('applies'));
    }

    public function create() {
        return view('user/apply/create');
    }

    public function store(UserApplyStoreRequest $request) {
        // Merge all input data with user id
        $user_id     = $this->user->id;
        $apply_input = array_merge($request->all(), [
            'code'    => Uuid::generate(),
            'user_id' => $user_id
        ]);

        // Set default status
        if (array_key_exists('status', $apply_input) === false) {
            $apply_input['status'] = 'waiting';
        }

        // Create apply and apply photo record
        $apply = $this->applyRepository->create($apply_input);

        // Upload HKID
        $upload_input = [
            $this->uploadFile($user_id, $apply->id, 'hkid',    $request->file('upload_hkid')),
            $this->uploadFile($user_id, $apply->id, 'address', $request->file('upload_address')),
            $this->uploadFile($user_id, $apply->id, 'income',  $request->file('upload_income')),
        ];

        foreach($upload_input as $input) {
            $this->applyPhotoRepository->create($input);
        }

        return redirect()->back()->withNotice(trans('user.apply.create.success.application_submitted'));
    }

    public function show($id) {
        $apply  = $this->applyRepository->findMyApplyById($this->user->id, $id);

        // Make sure the records is exists and own by related user
        if (empty($apply->id) === true) {
            return redirect()->back()->withErrors([
                'error' => trans('user.apply.show.error.not_found_records')
            ]);
        }else{
            $photos = $apply->photos;

            return view('user/apply/show', compact('apply', 'photos'));
        }
    }

    private function uploadFile($user_id, $apply_id, $category, $file) {
        $name = date("YmdHis").'_'.str_random(10);
        $ext  = $file->getClientOriginalExtension();
        $path = sprintf("%s/%s", public_path('upload/apply'), $name.'.'.$ext);

        $image = Image::make($file)->save($path);
        $input = [
            'user_id'  => $user_id,
            'apply_id' => $apply_id,
            'category' => $category,
            'photo'    => $image->basename,
        ];

        return $input;
    }

}
