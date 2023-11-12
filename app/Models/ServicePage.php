<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;

class ServicePage extends Model
{
    use HasTranslation, HasMedias, HasRevisions;

    protected $fillable = [
        'published',
        'title',
        'description',
        'sub_title',
        'block_description',
        'block_title',
        'services',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'active',
        'sub_title',
        'block_description',
        'block_title',
    ];

    protected $casts = [
        'services' => 'array'
    ];

}
