<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class BannerSetting extends Model implements HasMedia
{
    use HasTranslations, InteractsWithMedia;

    protected $table = 'banner_settings';

    public $translatable = ['title', 'description', 'link_title', 'review'];
}
