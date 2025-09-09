<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{

    public string $site_name_en;
    public string $site_name_ar;
    public string $site_meta_description_en;
    public string $site_meta_description_ar;
    public string $site_meta_keywords_en;
    public string $site_meta_keywords_ar;
    public string $site_meta_author_en;
    public string $site_meta_author_ar;
    public string $first_address_title_en;
    public string $first_address_title_ar;
    public string $first_address_en;
    public string $first_address_ar;
    public string $first_address_phone;
    public string $second_address_title_en;
    public string $second_address_title_ar;
    public string $second_address_en;
    public string $second_address_ar;
    public string $second_address_phone;
    public ?string $site_logo;
    public ?string $site_favicon;

    public static function group(): string
    {
        return 'general';
    }

    public function getLocalized(string $field): ?string
    {
        $locale = app()->getLocale();
        $property = "{$field}_{$locale}";

        return $this->$property ?? null;
    }
}
