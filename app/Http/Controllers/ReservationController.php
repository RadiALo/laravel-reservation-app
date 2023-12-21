<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function reservations_get() {
        return view('reservations');
    }

    public function reservation_create_get () {
        return view('create-reservation');
    }

    public function reservation_create_post (Request $request) {
        $booking = new Reservation($request->all());
        auth()->user()->reservations()->save($booking);
        return redirect()->route('index')->with('success', 'Successfull reserve!');
    }
}
