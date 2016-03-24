<?php
namespace App\Repositories;

use App\Bases\AppRepository;
use App\Models\ApplyPhoto;

class ApplyPhotoRepository extends AppRepository {

    public function __construct(ApplyPhoto $apply_photo) {
        $this->apply_photo = $apply_photo;
    }

    public function create($input) {
        return (new $this->apply_photo)->create($input);
    }

}
