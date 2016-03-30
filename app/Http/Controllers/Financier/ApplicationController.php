<?php
namespace App\Http\Controllers\Financier;

use App\Http\Controllers\Controller;
use App\Repositories\ApplyRepository;

class ApplicationController extends Controller {

    protected $applyRepository;

    public function __construct(ApplyRepository $applyRepository) {
        $this->applyRepository = $applyRepository;
    }

    public function index() {
        $applies = $this->applyRepository->findAllAppliesByStatusWithPaginate('published');

        return view('financier/application/index', compact('applies'));
    }

    public function matched() {
        return view('financier/application/matched');
    }

    public function approved() {
        return view('financier/application/approved');
    }

}
