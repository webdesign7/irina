<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleJsonRepeaters;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Testimonial;

class TestimonialRepository extends ModuleRepository
{
    use HandleBlocks, HandleTranslations, HandleRevisions;

    use HandleJsonRepeaters;

    protected $jsonRepeaters = [
        'testimonials',
    ];
    public function __construct(Testimonial $model)
    {
        $this->model = $model;
    }
}
