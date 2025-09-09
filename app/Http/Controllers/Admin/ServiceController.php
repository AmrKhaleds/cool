<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->paginate(15);
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        // ✅ Validation
        $validated = $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'description.en' => 'required|string',
            'description.ar' => 'required|string',
            'keywords.en' => 'required|string|max:255',
            'keywords.ar' => 'required|string|max:255',
            'discount' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // ✅ Create service
        $service = new Service();
        $service->setTranslations('title', $validated['title']);
        $service->setTranslations('description', $validated['description']);
        $service->setTranslations('keywords', $validated['keywords']);
        $service->discount = $validated['discount'] ?? 0;
        $service->save();

        // ✅ Attach image via Media Library
        if ($request->hasFile('image')) {
            $service
                ->addMediaFromRequest('image')
                ->toMediaCollection('services'); // <-- collection name
        }

        return redirect()
            ->route('admin.services.index')
            ->with('success', 'Service created successfully!');
    }


    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        // ✅ Validate
        $validated = $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'description.en' => 'required|string',
            'description.ar' => 'required|string',
            'keywords.en' => 'required|string|max:255',
            'keywords.ar' => 'required|string|max:255',
            'discount' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // ✅ Update translations
        $service->setTranslations('title', $validated['title']);
        $service->setTranslations('description', $validated['description']);
        $service->setTranslations('keywords', $validated['keywords']);
        $service->discount = $validated['discount'] ?? 0;
        $service->save();

        // ✅ Handle new image (replace old if uploaded)
        if ($request->hasFile('image')) {
            $service->clearMediaCollection('services'); // remove old image
            $service
                ->addMediaFromRequest('image')
                ->toMediaCollection('services');
        }

        return redirect()
            ->route('admin.services.index')
            ->with('success', 'Service updated successfully!');
    }


    public function destroy(Service $service)
    {
        $service->clearMediaCollection('services'); // explicitly remove media
        $service->delete();

        return redirect()
            ->route('admin.services.index')
            ->with('success', 'Service deleted successfully!');
    }
}
