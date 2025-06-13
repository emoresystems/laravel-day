@extends('layouts.frontend')
@section('content')
 <!-- Hero Section -->
    <section class="bg-gradient-to-r from-green-600 to-green-800 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">About Our Alumni Association</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Connecting generations of Greenwood High graduates since 1952</p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0 md:pr-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Mission</h2>
                    <p class="text-gray-600 mb-4">The Greenwood High Alumni Association exists to foster lifelong connections between alumni, students, and the school community while supporting the continued excellence of Greenwood High School.</p>
                    <p class="text-gray-600">We strive to create meaningful opportunities for engagement, professional development, and service that honor our shared heritage and contribute to the school's bright future.</p>
                </div>
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         alt="Students at Greenwood High" 
                         class="rounded-lg shadow-xl w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- History Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Our History</h2>
            
            <div class="relative">
                <!-- Timeline line -->
                <div class="hidden md:block absolute left-1/2 h-full w-1 bg-green-600 transform -translate-x-1/2"></div>
                
                <!-- Timeline items -->
                <div class="space-y-12 md:space-y-0">
                    <!-- Item 1 -->
                    <div class="flex flex-col md:flex-row items-center md:items-start mb-12">
                        <div class="md:w-1/2 md:pr-12 md:text-right mb-4 md:mb-0">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h3 class="text-xl font-bold text-green-600 mb-2">1952</h3>
                                <p class="text-gray-600">Greenwood High School graduates its first class of 42 students. The alumni association is founded the same year by a group of dedicated graduates.</p>
                            </div>
                        </div>
                        <div class="hidden md:block md:w-1/2"></div>
                    </div>
                    
                    <!-- Item 2 -->
                    <div class="flex flex-col md:flex-row items-center md:items-start mb-12">
                        <div class="hidden md:block md:w-1/2"></div>
                        <div class="md:w-1/2 md:pl-12">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h3 class="text-xl font-bold text-green-600 mb-2">1975</h3>
                                <p class="text-gray-600">The association establishes its first scholarship fund, providing financial assistance to deserving students. To date, over $2.5 million in scholarships have been awarded.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 3 -->
                    <div class="flex flex-col md:flex-row items-center md:items-start mb-12">
                        <div class="md:w-1/2 md:pr-12 md:text-right mb-4 md:mb-0">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h3 class="text-xl font-bold text-green-600 mb-2">1998</h3>
                                <p class="text-gray-600">Our first international chapter opens in London, marking the beginning of our global alumni network that now spans 75+ countries.</p>
                            </div>
                        </div>
                        <div class="hidden md:block md:w-1/2"></div>
                    </div>
                    
                    <!-- Item 4 -->
                    <div class="flex flex-col md:flex-row items-center md:items-start">
                        <div class="hidden md:block md:w-1/2"></div>
                        <div class="md:w-1/2 md:pl-12">
                            <div class="bg-white p-6 rounded-lg shadow-md">
                                <h3 class="text-xl font-bold text-green-600 mb-2">2020</h3>
                                <p class="text-gray-600">Launch of our digital alumni portal, connecting over 15,000 alumni worldwide through virtual events, mentorship programs, and career networking.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Board Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Our Leadership</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Board Member 1 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Board Member" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Dr. Sarah Williamson</h3>
                        <p class="text-green-600 font-semibold mb-3">President</p>
                        <p class="text-gray-600 mb-2">Class of 1987</p>
                        <p class="text-gray-600">"It's an honor to serve our alumni community and help preserve the legacy of our beloved school."</p>
                    </div>
                </div>
                
                <!-- Board Member 2 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="Board Member" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Michael Rodriguez</h3>
                        <p class="text-green-600 font-semibold mb-3">Vice President</p>
                        <p class="text-gray-600 mb-2">Class of 1995</p>
                        <p class="text-gray-600">"Our alumni network has been instrumental in my career, and I'm passionate about paying it forward."</p>
                    </div>
                </div>
                
                <!-- Board Member 3 -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Board Member" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-1">Jennifer Park</h3>
                        <p class="text-green-600 font-semibold mb-3">Executive Director</p>
                        <p class="text-gray-600 mb-2">Class of 2005</p>
                        <p class="text-gray-600">"Every day I'm inspired by the incredible achievements of our alumni community."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Our Core Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md text-center">
                    <div class="bg-green-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-handshake text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Community</h3>
                    <p class="text-gray-600">We foster lifelong connections that transcend graduation years and geographic boundaries.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-center">
                    <div class="bg-green-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-graduation-cap text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Excellence</h3>
                    <p class="text-gray-600">We uphold the high standards of achievement that define the Greenwood High legacy.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-center">
                    <div class="bg-green-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-heart text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Service</h3>
                    <p class="text-gray-600">We give back to our school and communities through volunteerism and philanthropy.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-green-700 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Get Involved Today</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Whether you graduated last year or decades ago, there's a place for you in our alumni community.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <button class="bg-white text-green-700 font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition duration-300">Join Now</button>
                <button class="bg-transparent border-2 border-white text-white font-bold py-3 px-8 rounded-lg hover:bg-white hover:text-green-700 transition duration-300">Contact Our Team</button>
            </div>
        </div>
    </section>


@endsection