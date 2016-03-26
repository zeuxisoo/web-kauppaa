<?php
namespace App\Http\Controllers;

use App\Repositories\NewsRepository;

class NewsController extends Controller {

    protected $newsRepository;

    public function __construct(NewsRepository $newsRepository) {
        $this->newsRepository = $newsRepository;
    }

    public function show($id) {
        $news = $this->newsRepository->findById($id);

        if (empty($news->id) === true) {
            return redirect(route(homePage()))->withErrors([
                'error' => trans('news.show.error.not_found_news')
            ]);
        }else{
            return view('news/show', compact('news'));
        }
    }

}
