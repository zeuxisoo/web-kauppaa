<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminSiteUpdateAboutUsRequest;
use App\Repositories\SiteRepository;

class SiteController extends Controller {

    private $siteRepository;

    public function __construct(SiteRepository $siteRepository) {
        $this->siteRepository = $siteRepository;
    }

    public function editAboutUs() {
        $about_us = $this->siteRepository->findById(1);

        return view('admin/site/about_us/edit', compact('about_us'));
    }

    public function updateAboutUs(AdminSiteUpdateAboutUsRequest $request) {
        $id    = $request->input('id');
        $input = $request->only('description');
        $site  = $this->siteRepository->updateById($id, $input);

        return Redirect()->back()->withNotice(trans('admin.site.edit.about_us.success.about_us_updated'));
    }

}
