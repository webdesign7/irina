<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Repositories\PageRepository;

class PageController extends Controller
{
    public function __construct(
        public PageRepository $pageRepository){
    }

    public function show(Page $page)
    {
        return view('site.pages.show', [
            'page' => $page
        ]);
    }

}
