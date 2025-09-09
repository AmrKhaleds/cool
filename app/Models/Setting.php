<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'site_name_en',
        'site_name_ar',
        'site_meta_description_en',
        'site_meta_description_ar',
        'site_meta_keywords_en',
        'site_meta_keywords_ar',
        'site_meta_author_en',
        'site_meta_author_ar',
        'first_address_title_en',
        'first_address_title_ar',
        'first_address_en',
        'first_address_ar',
        'first_address_phone',
        'second_address_title_en',
        'second_address_title_ar',
        'second_address_en',
        'second_address_ar',
        'second_address_phone',
        'site_logo',
        'site_favicon',
    ];
}
