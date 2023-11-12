<?php

namespace App\Http\Controllers\Frontend;

use A17\Twill\Facades\TwillAppSettings;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Repositories\AboutRepository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AboutController extends Controller
{
    public function __construct(public AboutRepository $repository)
    {
    }

    /**
     * Provision a new web server.
     */
    public function __invoke()
    {
        $page = $this->repository->get()->firstOrFail();

        if ($page->published) {
            return view('site.about', [
                'page' => $page
            ]);
        }
        abort(404);
    }
}
