<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::latest()->paginate(15);
        return view('admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request)
    {
        // ✅ Validation
        $validated = $request->validate([
            'question.en' => 'required|string',
            'question.ar' => 'required|string',
            'answer.en' => 'required|string|max:255',
            'answer.ar' => 'required|string|max:255',
        ]);

        // ✅ Create         $faq->clearMediaCollection('faq'); // explicitly remove media

        $faq = new Faq();
        $faq->setTranslations('question', $validated['question']);
        $faq->setTranslations('answer', $validated['answer']);

        $faq->save();

        return redirect()
            ->route('admin.faqs.index')
            ->with('success', 'Faq created successfully!');
    }


    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        // ✅ Validate
        $validated = $request->validate([
            'question.en' => 'required|string',
            'question.ar' => 'required|string',
            'answer.en' => 'required|string|max:255',
            'answer.ar' => 'required|string|max:255',
        ]);

        $faq->setTranslations('question', $validated['question']);
        $faq->setTranslations('answer', $validated['answer']);
        $faq->save();

        return redirect()
            ->route('admin.faqs.index')
            ->with('success', 'faq updated successfully!');
    }


    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()
            ->route('admin.faqs.index')
            ->with('success', 'Faq deleted successfully!');
    }
}
