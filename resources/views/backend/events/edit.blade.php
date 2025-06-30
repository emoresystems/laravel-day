@extends('backend.layouts.app')

@section('content')
<h1>edit an event</h1>
<form action="{{route('events.update', $event->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="title">Title</label>
    <input type="text" name="title" id="title" required value="{{ old('title', $event->title) }}"> <br><br>

    <label for="description">Description</label>
    <input type="text" name="description" id="description" value="{{ old('description', $event->description) }}"> <br><br>

    <button type="submit">edit</button>
</form>

@endsection