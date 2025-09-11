<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BannerSetting;
use Illuminate\Http\Request;

class BannerSettingController extends Controller
{
    public function edit()
    {
        // Always take first row or create if empty
        $banner = BannerSetting::firstOrCreate([]);

        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'description.en' => 'required|string',
            'description.ar' => 'required|string',
            'link_title.en' => 'required|string|max:255',
            'link_title.ar' => 'required|string|max:255',
            'link' => 'required|url',
            'image' => 'nullable',
            'review.en' => 'required|string',
            'review.ar' => 'required|string',
            'stars' => 'nullable|integer|min:0|max:5',
        ]);

        $banner = BannerSetting::firstOrCreate([]);

        // Update translatable fields
        $banner->setTranslations('title', $validated['title']);
        $banner->setTranslations('description', $validated['description']);
        $banner->setTranslations('link_title', $validated['link_title']);
        $banner->setTranslations('review', $validated['review']);


        // Update other fields
        $banner->link = $validated['stars'];
        $banner->link = $validated['link'];
        $banner->save();

        // Handle image upload
        if ($request->hasFile('image')) {
            $banner->clearMediaCollection('banners');
            $banner->addMediaFromRequest('image')->toMediaCollection('banners');
        }

        return redirect()->route('admin.banners.edit')
            ->with('success', 'Banner updated successfully!');
    }
}
