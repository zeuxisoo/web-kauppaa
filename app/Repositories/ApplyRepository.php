<?php
namespace App\Repositories;

use App\Bases\AppRepository;
use App\Models\Apply;

class ApplyRepository extends AppRepository {

    public function __construct(Apply $apply) {
        $this->apply = $apply;
    }

    public function create($input) {
        return (new $this->apply)->create($input);
    }

    public function findMyApplies($user_id) {
        return $this->apply->whereUserId($user_id)->orderBy('created_at', 'desc')->get();
    }

    public function findMyApplyById($user_id, $apply_id) {
        return $this->apply->whereUserId($user_id)->find($apply_id);
    }

    public function findAllApplies() {
        return $this->apply->orderBy('created_at', 'desc')->get();
    }

    public function findApplyById($apply_id) {
        return $this->apply->find($apply_id);
    }

    public function updateApplyById($apply_id, $input) {
        return $this->findApplyById($apply_id)->update($input);
    }

}
