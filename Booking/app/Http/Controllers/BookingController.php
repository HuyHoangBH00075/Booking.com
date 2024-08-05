<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function create()
    {

    }

    public function store(Request $request)
    {

        $booking = new Booking();
        $booking->user_id = auth()->user()->id;
        $booking->room_id = $request->room_id;

        $booking->save();


    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

        $booking = Booking::findOrFail($id);
        $booking->room_id = $request->room_id;

        $booking->save();


    }

    public function destroy($id)
    {

        $booking = Booking::findOrFail($id);
        $booking->delete();


    }
}
