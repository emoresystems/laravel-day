@extends('layouts.frontend')

@section('content')

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-green-600 to-green-800 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Welcome Back, Alumni!</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Reconnect with your classmates, relive memories, and stay updated with your alma mater.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <button class="bg-white text-green-700 font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition duration-300">Join Now</button>
                <button class="bg-transparent border-2 border-white text-white font-bold py-3 px-8 rounded-lg hover:bg-white hover:text-green-700 transition duration-300">Learn More</button>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <div class="p-6">
                    <div class="text-4xl font-bold text-green-600 mb-2">15K+</div>
                    <div class="text-gray-600">Alumni Members</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold text-green-600 mb-2">75+</div>
                    <div class="text-gray-600">Countries</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold text-green-600 mb-2">120+</div>
                    <div class="text-gray-600">Events Yearly</div>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold text-green-600 mb-2">1952</div>
                    <div class="text-gray-600">First Graduating Class</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Upcoming Events -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Upcoming Events</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Event 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="h-48 bg-green-600 flex items-center justify-center text-white text-2xl font-bold">
                        Homecoming 2023
                    </div>
                    <div class="p-6">
                        <div class="text-green-600 font-semibold mb-2">Oct 15, 2023</div>
                        <h3 class="text-xl font-bold mb-3">Annual Homecoming Weekend</h3>
                        <p class="text-gray-600 mb-4">Join us for a weekend of nostalgia, networking, and fun activities with your former classmates.</p>
                        <button class="text-green-600 font-semibold hover:underline">Learn More →</button>
                    </div>
                </div>
                
                <!-- Event 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="h-48 bg-blue-600 flex items-center justify-center text-white text-2xl font-bold">
                        Career Fair
                    </div>
                    <div class="p-6">
                        <div class="text-blue-600 font-semibold mb-2">Nov 5, 2023</div>
                        <h3 class="text-xl font-bold mb-3">Alumni Career Networking</h3>
                        <p class="text-gray-600 mb-4">Connect with fellow alumni and current students for mentorship and career opportunities.</p>
                        <button class="text-blue-600 font-semibold hover:underline">Learn More →</button>
                    </div>
                </div>
                
                <!-- Event 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="h-48 bg-purple-600 flex items-center justify-center text-white text-2xl font-bold">
                        Reunion
                    </div>
                    <div class="p-6">
                        <div class="text-purple-600 font-semibold mb-2">Dec 10, 2023</div>
                        <h3 class="text-xl font-bold mb-3">Class of 2013 10-Year Reunion</h3>
                        <p class="text-gray-600 mb-4">Celebrate a decade since graduation with your classmates at this special event.</p>
                        <button class="text-purple-600 font-semibold hover:underline">Learn More →</button>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                <button class="bg-green-600 text-white font-bold py-3 px-8 rounded-lg hover:bg-green-700 transition duration-300">View All Events</button>
            </div>
        </div>
    </section>

    <!-- Alumni Stories -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Alumni Success Stories</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-100 p-8 rounded-lg">
                    <div class="flex items-center mb-6">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Alumni" class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-lg">Sarah Johnson</h4>
                            <p class="text-gray-600">Class of 2005, CEO at TechSolutions</p>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">"Greenwood High provided me with not just education, but the foundation for my career. The alumni network helped me land my first internship which set me on this path."</p>
                </div>
                <div class="bg-gray-100 p-8 rounded-lg">
                    <div class="flex items-center mb-6">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Alumni" class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-lg">Michael Chen</h4>
                            <p class="text-gray-600">Class of 2010, Research Scientist</p>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">"The connections I made through the alumni association have been invaluable. I've found mentors, collaborators, and even hired fellow alumni for my research team."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-green-700 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Reconnect?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Join our growing network of alumni and stay connected with your school community.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <button class="bg-white text-green-700 font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition duration-300">Register Now</button>
                <button class="bg-transparent border-2 border-white text-white font-bold py-3 px-8 rounded-lg hover:bg-white hover:text-green-700 transition duration-300">Contact Us</button>
            </div>
        </div>
    </section>
@endsection