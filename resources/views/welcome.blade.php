@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="bg-gray-100 text-gray-900 flex flex-col items-center justify-center min-h-screen">
        <h1 class="text-3xl font-bold">Chirps</h1>
        <p class="mt-2">This is a simple chirp application built with Laravel.</p>
        <div>
            <img src="{{ asset('uploads/market.jpg') }}" alt="Chirps Image" class="mt-4 h-[60vh] w-auto object-cover rounded-lg shadow-lg">
        </div>
    </div>
@endsection