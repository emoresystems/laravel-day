<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenwood High Alumni Association</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="flex items-center">
                        <i class="fas fa-school text-2xl text-green-600 mr-2"></i>
                        <span class="text-xl font-bold text-gray-800">Greenwood Alumni</span>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-green-600 font-medium">Home</a>
                    <a href="/events" class="text-gray-600 hover:text-green-600">Events</a>
                    <a href="#" class="text-gray-600 hover:text-green-600">Gallery</a>
                    <a href="#" class="text-gray-600 hover:text-green-600">Members</a>
                    <a href="#" class="text-gray-600 hover:text-green-600">News</a>
                    <a href="/about" class="text-gray-600 hover:text-green-600">About</a>
                </div>
                <div class="md:hidden">
                    <button class="text-gray-600 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
<!-- end nav -->

@yield('content')

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 flex items-center">
                        <i class="fas fa-school text-2xl text-green-400 mr-2"></i>
                        <span>Greenwood Alumni</span>
                    </h3>
                    <p class="text-gray-400">Connecting alumni worldwide since 1952. Keeping the school spirit alive across generations.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Events</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Gallery</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Directory</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Resources</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Career Services</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Mentorship Program</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Volunteer</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Give Back</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Connect With Us</h4>
                    <div class="flex space-x-4 mb-4">
                        <a href="#" class="text-gray-400 hover:text-white text-2xl"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white text-2xl"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white text-2xl"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white text-2xl"><i class="fab fa-instagram"></i></a>
                    </div>
                    <p class="text-gray-400">contact@greenwoodalumni.org</p>
                    <p class="text-gray-400">+1 (555) 123-4567</p>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>© 2023 Greenwood High School Alumni Association. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>