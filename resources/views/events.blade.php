@extends('layouts.frontend')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold text-center mb-4">Our Events</h1>
    <h2 class="text-xl text-gray-700 text-center mb-8">Total Events: {{ $totalevents }}</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($events as $event)
            <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition">
                <p class="text-sm text-gray-500 mb-2">Event ID: {{ $event->id }}</p>
                <h3 class="text-2xl font-semibold mb-2 text-blue-600">{{ $event->title }}</h3>
                <p class="text-gray-700">{{ $event->description }}</p>
            </div>
        @empty
            <div class="col-span-full text-center text-gray-500">
                <p>No events at the moment</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
