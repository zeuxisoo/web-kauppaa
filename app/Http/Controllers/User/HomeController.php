<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Repositories\ApplyRepository;
use App\Repositories\NewsRepository;

class HomeController extends Controller {

    protected $user;
    protected $applyRepository;
    protected $newsRepository;

    public function __construct(ApplyRepository $applyRepository, NewsRepository $newsRepository) {
        $this->user            = auth()->user();
        $this->applyRepository = $applyRepository;
        $this->newsRepository  = $newsRepository;
    }

    public function index() {
        $applies = $this->applyRepository->findMyApplies($this->user->id);
        $news    = $this->newsRepository->findAllWithSimplePaginate();

        return view('user/home/index', compact('applies', 'news'));
    }

}
