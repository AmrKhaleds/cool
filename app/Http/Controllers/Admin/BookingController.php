<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = \App\Models\Booking::latest()->paginate(15);
        return view('admin.bookings.index', compact('bookings'));
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()
            ->route('admin.bookings.index')
            ->with('success', 'Booking deleted successfully!');
    }
}
