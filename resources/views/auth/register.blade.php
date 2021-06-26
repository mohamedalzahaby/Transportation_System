@extends('layouts\app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-6">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="name"
                    class="bg-gray-100 border-2 w-full rounded-lg" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="sr-only">email</label>
                    <input type="text" name="email" id="email" placeholder="email"
                    class="bg-gray-100 border-2 w-full rounded-lg" value="{{old('email')}}">
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="username" class="sr-only">username</label>
                    <input type="text" name="username" id="username" placeholder="username"
                    class="bg-gray-100 border-2 w-full rounded-lg" value="{{old('username')}}">
                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="sr-only">password</label>
                    <input type="password" name="password" id="password" placeholder="password"
                    class="bg-gray-100 border-2 w-full rounded-lg" value="">
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password_confirmation" class="sr-only">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="repeat your password"
                    class="bg-gray-100 border-2 w-full rounded-lg" value="">
                    @error('password_confirmation')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-6">
                    <button type="submit" class="bg-blue-500 text-white px-4 px-3 rounded font-medium w-full">Register</button>
                </div>
                
                

            </form>
        </div>
    </div>
@endsection