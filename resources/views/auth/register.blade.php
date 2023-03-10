@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-slate-100 p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}" >

                    @error('name')
                    <div class="text-red-500 mt-2 text-sm"> {{ $message  }} </div>
                    @enderror

                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Your username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" value="{{ old('username') }}">

                    @error('username')
                    <div class="text-red-500 mt-2 text-sm"> {{ $message  }} </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your @mail" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}" >

                    @error('email')
                    <div class="text-red-500 mt-2 text-sm"> {{ $message  }} </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

                    @error('password')
                    <div class="text-red-500 mt-2 text-sm"> {{ $message  }} </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password again</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Your password again" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="" >

                    @error('password_confirmation')
                    <div class="text-red-500 mt-2 text-sm"> {{ $message  }} </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-purple-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>
                <div class="text-slate-400 mt-2 text-sm">The password must be at least 8 characters. </div>
            </form>
        </div>
    </div>
@endsection
