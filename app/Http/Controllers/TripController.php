<?php

namespace App\Http\Controllers;

use App\Models\Station;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TripController extends Controller
{
    public function index()
    {
        $stations = Station::all();
        $trips = Trip::all();
        return view('trips')->with('stations' , $stations)->with('trips' , $trips);
    }

    public function store(Request $request)
    {
        $trip = new Trip();
        $trip->start = $request->input('start');
        $trip->end  = $request->input('end');
        $start_Station_name = DB::select('select name from station where id = ?', [$trip->start]);
        $end_Station_name = DB::select('select name from station where id = ?', [$trip->end]);
        $trip->name = $start_Station_name[0]->name." - ".$end_Station_name[0]->name;
        $trip->parentId  = $request->input('parentId');
        $trip->save();
        return redirect('/trip')->with('success' , 'trip Created');
    }
}
