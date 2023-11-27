<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;
use App\Repositories\PageRepository;
use Mcamara\LaravelLocalization\Interfaces\LocalizedUrlRoutable;

class Page extends Model implements LocalizedUrlRoutable
{
    use HasTranslation, HasSlug, HasMedias, HasRevisions;

    protected $fillable = [
        'published',
        'title',
        'description',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'active',
    ];

    public $slugAttributes = [
        'title',
    ];

    public function resolveRouteBinding($value, $field = null)
    {
        /** @var PageRepository $repository */
        $repository = app(PageRepository::class);
        $service = $repository->forSlug($value);

        abort_if(! $service, 404);

        return $service;
    }

    // #region routekey
    public function getLocalizedRouteKey($locale)
    {
        return $this->getSlug($locale);
    }

}
