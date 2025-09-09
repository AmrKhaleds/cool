<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'service' => 'required',
            'date' => 'required|date',
            'location' => 'required',
            'additional_details' => 'required|string',
        ]);

        Booking::create($request->all());

        return redirect()->route('front.index')->with('success', 'Service Booked Successfully.');
    }
}
