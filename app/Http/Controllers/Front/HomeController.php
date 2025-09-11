<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BannerSetting;
use App\Models\Faq;
use App\Models\Number;
use App\Models\Review;
use App\Models\Service;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke()
    {
        $services = Service::all();
        $banner = BannerSetting::first();
        $whyChooseUs = WhyChooseUs::first();
        $numbers = Number::all();
        $reviews = Review::all();
        $faqs = Faq::all();
        return view('front.index', compact('services', 'banner', 'whyChooseUs', 'numbers', 'reviews', 'faqs'));
    }
}
