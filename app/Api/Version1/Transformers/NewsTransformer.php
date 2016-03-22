<?php
namespace App\Api\Version1\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\News;

class NewsTransformer extends TransformerAbstract {

    public function transform(News $news) {
        return [
            'id'      => $news->id,
            'title'   => $news->title,
            'content' => $news->content,
        ];
    }

}
