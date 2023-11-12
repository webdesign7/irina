<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Testimonial;
use App\Repositories\ServicePageRepository;
use App\Repositories\ServiceRepository;

class ServiceController extends Controller
{
    public function __construct(
        public ServiceRepository $repository,
        public ServicePageRepository $servicePageRepository){
    }

    /**
     * Provision a new web server.
     */
    public function index()
    {
        $services = $this->repository->get()->all();
        $servicePage =  $this->servicePageRepository->getBaseModel()->first();

        return view('site.services.index', [
            'services' => $services,
            'servicePage' => $servicePage
        ]);
    }

    public function show(Service $service)
    {
        return view('site.services.show', [
            'service' => $service
        ]);
    }

}
