@extends('backend.layouts.app')

@section('content')
      <!-- Cards -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white shadow rounded p-4">
          <h2 class="text-xl font-semibold mb-2">Alumni</h2>
          <p class="text-3xl font-bold text-blue-500">1,245</p>
        </div>

        <div class="bg-white shadow rounded p-4">
          <h2 class="text-xl font-semibold mb-2">Events</h2>
          <p class="text-3xl font-bold text-green-500">32</p>
        </div>

        <div class="bg-white shadow rounded p-4">
          <h2 class="text-xl font-semibold mb-2">Donations</h2>
          <p class="text-3xl font-bold text-purple-500">KES 540K</p>
        </div>

        <div class="bg-white shadow rounded p-4">
          <h2 class="text-xl font-semibold mb-2">Messages</h2>
          <p class="text-3xl font-bold text-orange-500">87</p>
        </div>
      </div>
@endsection