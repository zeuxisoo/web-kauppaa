<?php
namespace App\Api\Version1\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\ApplyPhoto;

class ApplyPhotoTransformer extends TransformerAbstract {

    public function transform(ApplyPhoto $apply) {
        return [
            'id'       => $apply->id,
            'apply_id' => $apply->apply_id,
            'category' => $apply->category,
            'photo'    => $apply->photo,
        ];
    }

}
