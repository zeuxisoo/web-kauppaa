<?php
namespace App\Repositories;

use App\Bases\AppRepository;
use App\Models\Site;

class SiteRepository extends AppRepository {

    public function __construct(Site $site) {
        $this->site = $site;
    }

    public function findById($id) {
        return $this->site->find($id);
    }

    public function updateById($id, $input) {
        return $this->site->whereId($id)->update($input);
    }

}
