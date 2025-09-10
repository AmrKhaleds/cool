<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->paginate(15);
        return view('admin.reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('admin.reviews.create');
    }

    public function store(Request $request)
    {
        // ✅ Validation
        $validated = $request->validate([
            'review.en' => 'required|string',
            'review.ar' => 'required|string',
            'client.en' => 'required|string|max:255',
            'client.ar' => 'required|string|max:255',
            'stars' => 'nullable|integer|min:0|max:5',
            'image' => 'nullable',
        ]);

        // ✅ Create review
        $review = new Review();
        $review->setTranslations('review', $validated['review']);
        $review->setTranslations('client', $validated['client']);
        $review->stars = $validated['stars'] ?? 0;
        $review->save();

        // ✅ Attach image via Media Library
        if ($request->hasFile('image')) {
            $review
                ->addMediaFromRequest('image')
                ->toMediaCollection('reviews'); // <-- collection name
        }

        return redirect()
            ->route('admin.reviews.index')
            ->with('success', 'Review created successfully!');
    }


    public function edit(Review $review)
    {
        return view('admin.reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        // ✅ Validate
        $validated = $request->validate([
            'review.en' => 'required|string',
            'review.ar' => 'required|string',
            'client.en' => 'required|string|max:255',
            'client.ar' => 'required|string|max:255',
            'stars' => 'nullable|integer|min:0|max:5',
            'image' => 'nullable',
        ]);

        $review->setTranslations('review', $validated['review']);
        $review->setTranslations('client', $validated['client']);
        $review->stars = $validated['stars'] ?? 0;
        $review->save();

        // ✅ Handle new image (replace old if uploaded)
        if ($request->hasFile('image')) {
            $review->clearMediaCollection('reviews'); // remove old image
            $review
                ->addMediaFromRequest('image')
                ->toMediaCollection('reviews');
        }

        return redirect()
            ->route('admin.reviews.index')
            ->with('success', 'review updated successfully!');
    }


    public function destroy(Review $review)
    {
        $review->clearMediaCollection('reviews'); // explicitly remove media
        $review->delete();

        return redirect()
            ->route('admin.reviews.index')
            ->with('success', 'Review deleted successfully!');
    }
}
