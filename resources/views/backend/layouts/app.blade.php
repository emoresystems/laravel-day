<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alumni Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md hidden md:block">
            <div class="p-6 font-bold text-2xl border-b">Alumni Admin</div>
            <nav class="mt-6">
                <ul class="space-y-2 text-gray-700 font-medium px-4">
                    <li><a href="#" class="block p-2 hover:bg-gray-200 rounded">Dashboard</a></li>
                    <li class="group relative">
                        <a href="#" class="block p-2 hover:bg-gray-200 rounded flex justify-between items-center">
                            Events List
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                        <!-- Dropdown -->
                        <ul class="absolute left-0 top-full hidden group-hover:block bg-white shadow-lg rounded w-48 z-10">
                            <li><a href="{{ route('backindex') }}" class="block px-4 py-2 hover:bg-gray-100">All Events</a></li>
                            <li><a href="{{ route('events.create') }}" class="block px-4 py-2 hover:bg-gray-100">Add Event</a></li>                           
                        </ul>
                    </li>

                    <li><a href="#" class="block p-2 hover:bg-gray-200 rounded">Events</a></li>
                    <li><a href="#" class="block p-2 hover:bg-gray-200 rounded">Donations</a></li>
                    <li><a href="#" class="block p-2 hover:bg-gray-200 rounded">Messages</a></li>
                  <form action="{{ route('logout') }}" method="post">
                        @csrf
                      <button type="submit">Logout</button>
                  </form>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <!-- Top Bar -->
            <header class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-semibold">Dashboard</h1>                
            </header>

            @yield('content')

        </div>
    </div>

</body>

</html>