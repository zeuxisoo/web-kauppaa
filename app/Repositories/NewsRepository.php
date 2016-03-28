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

    public function findAllWithSimplePaginate($per_page = 5) {
        return $this->news->orderBy('created_at', 'desc')->simplePaginate($per_page);
    }

    public function findAllWithPaginate($per_page = 5) {
        return $this->news->orderBy('created_at', 'desc')->paginate($per_page);
    }

    public function create($input) {
        return (new News)->create($input);
    }

    public function updateById($id, $input) {
        return $this->news->whereId($id)->update($input);
    }

    public function deleteByIds($ids) {
        return $this->news->destroy($ids);
    }

}
