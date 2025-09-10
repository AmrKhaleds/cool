<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Number;
use Illuminate\Http\Request;

class NumberController extends Controller
{
    public function index()
    {
        $numbers = Number::latest()->paginate(15);
        return view('admin.numbers.index', compact('numbers'));
    }

    public function create()
    {
        return view('admin.numbers.create');
    }

    public function store(Request $request)
    {
        // ✅ Validation
        $validated = $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'description.en' => 'required|string',
            'description.ar' => 'required|string',
            'number' => 'required|string|max:255',
        ]);

        $number = new Number();
        $number->setTranslations('title', $validated['title']);
        $number->setTranslations('description', $validated['description']);

        $number->number = $validated['number'] ?? 0;
        $number->save();

        return redirect()
            ->route('admin.numbers.index')
            ->with('success', 'Number created successfully!');
    }


    public function edit(Number $number)
    {
        return view('admin.numbers.edit', compact('number'));
    }

    public function update(Request $request, Number $number)
    {
        // ✅ Validate
        $validated = $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'description.en' => 'required|string',
            'description.ar' => 'required|string',
            'number' => 'required|string|max:255',

        ]);

        // ✅ Update translations
        $number->setTranslations('title', $validated['title']);
        $number->setTranslations('description', $validated['description']);
        $number->number = $validated['number'] ?? 0;

        $number->save();

        return redirect()
            ->route('admin.numbers.index')
            ->with('success', 'Number updated successfully!');
    }


    public function destroy(Number $number)
    {
        $number->delete();

        return redirect()
            ->route('admin.numbers.index')
            ->with('success', 'Number deleted successfully!');
    }
}
