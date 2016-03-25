<?php
namespace App\Repositories;

use App\Bases\AppRepository;
use App\Models\News;

class NewsRepository extends AppRepository {

    public function __construct(News $news) {
        $this->news = $news;
    }

    public function findById($id) {
        return $this->news->find($id);
    }

    public function findAll() {
        return $this->news->orderBy('created_at', 'desc')->simplePaginate(5);
    }

}
