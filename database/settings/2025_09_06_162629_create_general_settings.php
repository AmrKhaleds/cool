<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        // Site Details and seo
        $this->migrator->add('general.site_name_en', 'My Site');
        $this->migrator->add('general.site_name_ar', 'موقعي');
        $this->migrator->add('general.site_meta_description_en', 'My Site Description');
        $this->migrator->add('general.site_meta_description_ar', 'وصف موقعي');
        $this->migrator->add('general.site_meta_keywords_en', 'My Site Keywords');
        $this->migrator->add('general.site_meta_keywords_ar', 'كلمات موقعي');
        $this->migrator->add('general.site_meta_author_en', 'My Site Author');
        $this->migrator->add('general.site_meta_author_ar', 'مؤلف موقعي');

        // Addresses
        $this->migrator->add('general.first_address_title_en', 'My Site Title');
        $this->migrator->add('general.first_address_title_ar', 'عنوان موقعي');
        $this->migrator->add('general.first_address_en', 'My Site Address');
        $this->migrator->add('general.first_address_ar', 'عنوان موقعي');
        $this->migrator->add('general.first_address_phone', '1234567890');

        $this->migrator->add('general.second_address_title_en', 'My Site Title');
        $this->migrator->add('general.second_address_title_ar', 'عنوان موقعي');
        $this->migrator->add('general.second_address_en', 'My Site Address');
        $this->migrator->add('general.second_address_ar', 'عنوان موقعي');
        $this->migrator->add('general.second_address_phone', '1234567890');

        // Site Logo and Favicon
        $this->migrator->add('general.site_logo', 'logo.png');
        $this->migrator->add('general.site_favicon', 'favicon.png');
    }
};
