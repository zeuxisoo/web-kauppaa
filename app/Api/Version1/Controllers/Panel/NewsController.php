<?php
namespace App\Api\Version1\Controllers\Panel;

use Illuminate\Http\Request;
use App\Api\Version1\Bases\ApiController;
use App\Api\Version1\Repositories\NewsRepository;
use App\Api\Version1\Transformers\NewsTransformer;

class NewsController extends ApiController {

    protected $newRepository;

    public function __construct(NewsRepository $newRepository) {
        $this->newRepository = $newRepository;
    }

    public function all(Request $request) {
        $news = $this->newRepository->all();

        return $this->response->item($news, new NewsTransformer);
    }

}
