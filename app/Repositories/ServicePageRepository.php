<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleJsonRepeaters;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\ServicePage;

class ServicePageRepository extends ModuleRepository
{
    use HandleTranslations, HandleMedias, HandleRevisions;

    use HandleJsonRepeaters;
    protected $jsonRepeaters = [
        'services',
    ];

    public function __construct(ServicePage $model)
    {
        $this->model = $model;
    }
}
