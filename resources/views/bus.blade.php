@extends('layouts\app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form action="{{Route("bus")}}" method="post">
                @csrf
                <label for="">create new bus</label>
                <select name="tripId">
                    @forelse ($trips as $trip)
                        <option value="{{$trip->id}}">{{$trip->name}}</option>
                    @empty
                        <label for="">No trips added yet</label>
                    @endforelse
                   </select>
                <label for="">number of seats</label>
                <input type="number" name="seats" id="" >
                <label for="">bus model</label>
                <input type="text" name="model" id="">
                <input type="submit" value="submit">
            </form>
        </div>
    </div>
@endsection
