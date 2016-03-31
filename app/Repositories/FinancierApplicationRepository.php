<?php
namespace App\Repositories;

use App\Bases\AppRepository;
use App\Models\FinancierApplication;

class FinancierApplicationRepository extends AppRepository {

    public function __construct(FinancierApplication $financier_application) {
        $this->financier_application = $financier_application;
    }

    public function create($input) {
        return (new $this->financier_application)->create($input);
    }

    public function findByUserIdAndApplyId($user_id, $apply_id) {
        return $this->financier_application->whereUserId($user_id)->whereApplyId($apply_id)->first();
    }

}
