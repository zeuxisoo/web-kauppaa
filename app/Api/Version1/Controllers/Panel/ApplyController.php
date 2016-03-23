<?php
namespace App\Api\Version1\Controllers\Panel;

use Image;
use Illuminate\Http\Request;
use App\Api\Version1\Bases\ApiController;
use App\Api\Version1\Requests\ApplyStep1Request;
use App\Api\Version1\Requests\ApplyStep2Request;
use App\Api\Version1\Repositories\ApplyRepository;
use App\Api\Version1\Repositories\ApplyPhotoRepository;
use App\Api\Version1\Transformers\ApplyTransformer;
use App\Api\Version1\Transformers\ApplyPhotoTransformer;

class ApplyController extends ApiController {

    protected $applyRepository;
    protected $applyPhotoRepository;

    public function __construct(ApplyRepository $applyRepository, ApplyPhotoRepository $applyPhotoRepository) {
        $this->applyRepository      = $applyRepository;
        $this->applyPhotoRepository = $applyPhotoRepository;
    }

    public function createStep1(ApplyStep1Request $request) {
        $input = array_merge($request->all(), [
            'user_id' => $this->auth->user()->id
        ]);

        if (array_key_exists('status', $input) === false) {
            $input['status'] = 1;
        }

        $apply = $this->applyRepository->create($input);

        return $this->response->item($apply, new ApplyTransformer);
    }

    public function createStep2(ApplyStep2Request $request) {
        $file = $request->file('file');
        $name = date("YmdHis").'_'.str_random(10);
        $ext  = $file->getClientOriginalExtension();
        $path = sprintf("%s/%s", public_path('upload/apply'), $name.'.'.$ext);

        $image = Image::make($file)->save($path);
        $input = array_merge($request->only('apply_id', 'category'), [
            'user_id' => $this->auth->user()->id,
            'photo'   => $image->basename
        ]);

        $apply_photo = $this->applyPhotoRepository->create($input);

        return $this->response->item($apply_photo, new ApplyPhotoTransformer);
    }

}
