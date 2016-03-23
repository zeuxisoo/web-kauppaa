<?php
namespace App\Api\Version1\Repositories;

use App\Api\Version1\Bases\ApiRepository;
use App\Models\ApplyPhoto;

class ApplyPhotoRepository extends ApiRepository {

    public function __construct(ApplyPhoto $apply_photo) {
        $this->apply_photo = $apply_photo;
    }

    public function create($input) {
        return (new $this->apply_photo)->create($input);
    }

}
