<?php
namespace App\Api\Version1\Repositories;

use App\Api\Version1\Bases\ApiRepository;
use App\Models\News;

class NewsRepository extends ApiRepository {

    public function __construct(News $news) {
        $this->news = $news;
    }

    public function all() {
        return $this->news->orderBy('created_at', 'desc')->paginate();
    }

}
