<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Settings\GeneralSettings;

class SettingController extends Controller
{
    public function index(GeneralSettings $settings)
    {
        return view('admin.settings.index', compact('settings'));
    }

    public function store(Request $request, GeneralSettings $settings)
    {
        $data = $request->validate([
            'site_name_en' => 'required|string|max:255',
            'site_name_ar' => 'required|string|max:255',
            'site_meta_description_en' => 'nullable|string',
            'site_meta_description_ar' => 'nullable|string',
            'site_meta_keywords_en' => 'nullable|string',
            'site_meta_keywords_ar' => 'nullable|string',
            'site_meta_author_en' => 'nullable|string',
            'site_meta_author_ar' => 'nullable|string',
            'first_address_title_en' => 'nullable|string',
            'first_address_title_ar' => 'nullable|string',
            'first_address_en' => 'nullable|string',
            'first_address_ar' => 'nullable|string',
            'first_address_phone' => 'nullable|string',
            'second_address_title_en' => 'nullable|string',
            'second_address_title_ar' => 'nullable|string',
            'second_address_en' => 'nullable|string',
            'second_address_ar' => 'nullable|string',
            'second_address_phone' => 'nullable|string',
            'site_logo' => 'nullable|image|mimes:jpg,jpeg,png,svg',
            'site_favicon' => 'nullable|image|mimes:jpg,jpeg,png,svg,ico',


        ]);

        if ($request->hasFile('site_logo')) {
            $path = $request->file('site_logo')->store('logos', 'public');
            // dd($path);
            $data['site_logo'] = $path;
        }


        if ($request->hasFile('site_favicon')) {
            $data['site_favicon'] = $request->file('site_favicon')->store('favicons', 'public');
            // dd($data);

        }

        foreach ($data as $key => $value) {
            $settings->$key = $value;
        }

        $settings->save();

        return redirect()->back()->with('success', 'Settings saved successfully!');
    }
}
