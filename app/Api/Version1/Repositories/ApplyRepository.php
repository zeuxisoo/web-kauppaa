<?php
namespace App\Api\Version1\Repositories;

use App\Api\Version1\Bases\ApiRepository;
use App\Models\Apply;

class ApplyRepository extends ApiRepository {

    public function __construct(Apply $apply) {
        $this->apply = $apply;
    }

}
