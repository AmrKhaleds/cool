<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;

class WhyChooseUsController extends Controller
{
    public function edit()
    {
        $whyChooseUs = WhyChooseUs::firstOrCreate([]);
        return view('admin.why-choose-us.edit', compact('whyChooseUs'));
    }

    public function update(Request $request)
    {
        $whyChooseUs = WhyChooseUs::first();

        $whyChooseUs->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'card_title_1' => $request->input('card_title_1'),
            'card_description_1' => $request->input('card_description_1'),
            'card_title_2' => $request->input('card_title_2'),
            'card_description_2' => $request->input('card_description_2'),
            'card_title_3' => $request->input('card_title_3'),
            'card_description_3' => $request->input('card_description_3'),
            'card_title_4' => $request->input('card_title_4'),
            'card_description_4' => $request->input('card_description_4'),
        ]);

        if ($request->hasFile('image')) {
            $whyChooseUs->clearMediaCollection('why_choose_us');
            $whyChooseUs->addMediaFromRequest('image')->toMediaCollection('why_choose_us');
        }

        return redirect()->back()->with('success', 'Why Choose Us updated successfully!');
    }
}
