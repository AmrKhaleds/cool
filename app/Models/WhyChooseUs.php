<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class WhyChooseUs extends Model implements HasMedia
{
    use HasTranslations, InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'card_title_1',
        'card_description_1',
        'card_title_2',
        'card_description_2',
        'card_title_3',
        'card_description_3',
        'card_title_4',
        'card_description_4',
    ];

    public $translatable = [
        'title',
        'description',
        'card_title_1',
        'card_description_1',
        'card_title_2',
        'card_description_2',
        'card_title_3',
        'card_description_3',
        'card_title_4',
        'card_description_4',
    ];
}
