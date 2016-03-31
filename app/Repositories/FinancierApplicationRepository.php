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

    public function findByApplyId($apply_id) {
        return $this->financier_application->whereApplyId($apply_id)->first();
    }

    public function findByUserIdAndApplyId($user_id, $apply_id) {
        return $this->financier_application->whereUserId($user_id)->whereApplyId($apply_id)->first();
    }

    public function findMyMatchedApplicationsWithPaginate($user_id, $per_page = 10) {
        return $this->financier_application->with('apply')->whereUserId($user_id)->whereStatus('matched')->paginate($per_page);
    }

    public function findMyApprovedApplicationsWithPaginate($user_id, $per_page = 10) {
        return $this->financier_application->with('apply')->whereUserId($user_id)->whereStatus('approved')->paginate($per_page);
    }

    public function updateByFinancierIdAndApplyId($user_id, $apply_id, $input) {
        return $this->financier_application->whereUserId($user_id)->whereApplyId($apply_id)->update($input);
    }

}
