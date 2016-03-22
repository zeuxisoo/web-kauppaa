<?php
namespace App\Api\Version1\Controllers\Panel;

use Illuminate\Http\Request;
use App\Api\Version1\Bases\ApiController;
use App\Api\Version1\Requests\ApplyRequest;
use App\Api\Version1\Repositories\ApplyRepository;
use App\Api\Version1\Transformers\ApplyTransformer;

class ApplyController extends ApiController {

    protected $applyRepository;

    public function __construct(ApplyRepository $applyRepository) {
        $this->applyRepository = $applyRepository;
    }

    public function create(ApplyRequest $request) {
        if ($request->hasFile('file') === true) {
            $file = $request->file('file');

            if ($file->isValid() === true) {
                $file->move(public_path('upload/apply'), time().'.'.$file->getClientOriginalExtension());
            }
        }

        return $this->response->array([
            'chinese_name' => $request->input('chinese_name')
        ]);
    }

}
