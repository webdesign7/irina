<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use App\Repositories\ServiceRepository;
use Mcamara\LaravelLocalization\Interfaces\LocalizedUrlRoutable;

class Service extends Model implements Sortable, LocalizedUrlRoutable
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasRevisions, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'active',
    ];

    public $slugAttributes = [
        'title',
    ];

    public function resolveRouteBinding($slug, $field = null)
    {
        /** @var ServiceRepository $repository */
        $repository = app(ServiceRepository::class);
        $service = $repository->forSlug($slug);

        abort_if(! $service, 404);

        return $service;
    }

    // #region routekey
    public function getLocalizedRouteKey($locale)
    {
        return $this->getSlug($locale);
    }
}
