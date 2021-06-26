@extends('layouts\app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form action="{{Route("trip")}}" method="post">
                @csrf
                <label for="">create new trip</label>
                <select name="start">
                    @foreach ($stations as $station)
                         <option value="{{$station->id}}">{{$station->name}}</option>
                    @endforeach
                 </select>
                <label class="inputLabel">To</label>
                <select name="end">
                 @foreach ($stations as $station)
                      <option value="{{$station->id}}">{{$station->name}}</option>
                 @endforeach
                </select>
                <label for="">this trip is part of trip</label>
                <select name="parentId">
                    <option value="{{0}}">none</option>
                    @forelse ($trips as $trip)
                        <option value="{{$trip->id}}">{{$trip->name}}</option>
                    @empty

                    @endforelse
                   </select>
                <input type="submit" value="submit">
            </form>
        </div>
    </div>
@endsection
