<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function create($id)
    {
        $property = Property::findOrFail($id);
        return view('book', compact('property'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'booking_date' => 'required|date',
        ]);

        Booking::create([
            'property_id' => $request->property_id,
            'user_id' => Auth::id(),
            'booking_date' => $request->booking_date,
        ]);

        return redirect()->route('home')->with('success', 'Booking successful!');
    }
}
