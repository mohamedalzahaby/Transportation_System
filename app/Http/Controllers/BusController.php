<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Seat;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        return view('bus')->with('trips', $trips);
    }

    public function store(Request $request)
    {
        $bus = new Bus();
        $bus->tripId = $request->input('tripId');
        $bus->model = $request->input('model');
        $bus->save();
        $numberOfSeats = (int)$request->input('seats');
        for ($i=1; $i <=$numberOfSeats ; $i++) {
            $seat = new Seat();
            $seat->busId = $bus->id;
            $seat->number = $i;
            $seat->save();
        }

        return redirect('/trip')->with('success' , 'trip Created');
    }
}
