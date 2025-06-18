@extends('layouts.frontend')
@section('content')
<h1>our events</h1>
<h1>Our list of events</h1>
<div>
    @forelse ( $events as $event)
    <p>{{ $event->id }}</p>
    <h1>{{ $event->title }}</h1>
    <p>{{ $event->description }}</p>
    @empty
    <p>No events at the moment</p>
    @endforelse
</div>
@endsection