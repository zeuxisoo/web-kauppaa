<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminNewsCreateRequest;
use App\Http\Requests\AdminNewsUpdateRequest;
use App\Repositories\NewsRepository;

class NewsController extends Controller {

    private $newsRepository;

    public function __construct(NewsRepository $newsRepository) {
        $this->newsRepository = $newsRepository;
    }

    public function create() {
        return view('admin/news/create');
    }

    public function store(AdminNewsCreateRequest $request) {
        $input = $request->only('title', 'summary', 'content');
        $news  = $this->newsRepository->create($input);

        return Redirect()->back()->withNotice(trans('admin.news.create.success.news_created'));
    }

    public function manage() {
        $news = $this->newsRepository->findAllWithPaginate(10);

        return view('admin/news/manage', compact('news'));
    }

    public function edit($id) {
        $news = $this->newsRepository->findById($id);

        return view('admin/news/show', compact('news'));
    }

    public function update(AdminNewsUpdateRequest $request) {
        $id    = $request->input('id');
        $input = $request->only('title', 'summary', 'content');
        $news  = $this->newsRepository->updateById($id, $input);

        return Redirect()->back()->withNotice(trans('admin.news.edit.success.news_updated'));
    }

    public function destroy(Request $request) {
        $ids  = $request->input('ids');
        $news = $this->newsRepository->deleteByIds($ids);

        return Redirect()->back()->withNotice(trans('admin.news.destory.success.news_deleted'));
    }

}
