<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Seat;
use App\Models\Trip;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        $seats = Seat::all();
        return view('registration')->with('seats',$seats)->with('trips',$trips);
    }

    public function storeRelation(Request $request)
    {
        dd(auth()->user()->id);
        $registration = new Registration();
        $registration->tripId = $request->input('tripId');
        $registration->seatId = $request->input('seatId');

        $registration->userId = auth()->user()->id;
        $registration->save();
    }
}
