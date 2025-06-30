@extends('backend.layouts.app')

@section('content')
<h1>Create an event</h1>
<form action="{{ route('events.store') }}" method="post">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title" required> <br><br>

    <label for="description">Description</label>
    <input type="text" name="description" id="description"> <br><br>

    <button type="submit">Create</button>
</form>

@endsection