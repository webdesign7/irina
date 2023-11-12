<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;

class About extends Model
{
    use HasBlocks, HasTranslation, HasMedias, HasRevisions;

    protected $fillable = [
        'published',
        'title',
        'description',
        'name',
        'bio',
        'job_title',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'active',
        'name',
        'bio',
        'job_title',
    ];

}
