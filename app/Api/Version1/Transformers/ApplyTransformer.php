<?php
namespace App\Api\Version1\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\News;

class ApplyTransformer extends TransformerAbstract {

    public function transform(News $news) {
        return [

        ];
    }

}
