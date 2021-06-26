@extends('layouts\app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form action="{{Route("registration")}}" method="post">
                @csrf
                <label for="">create new trip</label>
                <select name="tripId">
                    @foreach ($trips as $trip)
                         <option value="{{$trip->id}}">{{$trip->name}}</option>
                    @endforeach
                 </select>
                <label class="inputLabel">Seat</label>
                <select name="seatId">
                 @foreach ($seats as $seat)
                      <option value="{{$seat->id}}">{{$seat->number}}</option>
                 @endforeach
                </select>
                <input type="submit" value="submit">
            </form>
        </div>
    </div>
@endsection
