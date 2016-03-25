<?php
namespace App\Http\Controllers\Financier;

use App\Http\Controllers\Controller;
use App\Repositories\NewsRepository;

class HomeController extends Controller {

    protected $newsRepository;

    public function __construct(NewsRepository $newsRepository) {
        $this->newsRepository = $newsRepository;
    }

    public function index() {
        $news = $this->newsRepository->findAll();

        return view('financier/home/index', compact('news'));
    }

}
