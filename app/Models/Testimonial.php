<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;

class Testimonial extends Model
{
    use HasBlocks, HasTranslation, HasRevisions;

    protected $fillable = [
        'published',
        'title',
        'description',
        'testimonials',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'active',
    ];

    protected $casts = [
        'testimonials' => 'array'
    ];
}
