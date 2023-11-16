<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Repositories\ContactRepository;

class ContactController extends Controller
{
    public function __construct(public ContactRepository $repository)
    {
    }

    /**
     * Provision a new web server.
     */
    public function __invoke()
    {
        $page = $this->repository->get()->firstOrFail();

        $services = Service::published()->orderBy('created_at', 'desc')->get();

        if ($page->published) {
            return view('site.contact', [
                'page' => $page,
                'services' => $services
            ]);
        }
        abort(404);
    }
}
