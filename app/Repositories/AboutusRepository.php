<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Aboutus;

class AboutusRepository extends ModuleRepository
{
    use HandleBlocks, HandleTranslations, HandleMedias, HandleRevisions;

    public function __construct(Aboutus $model)
    {
        $this->model = $model;
    }
}
