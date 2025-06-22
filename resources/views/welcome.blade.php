@extends('layouts.app')

@section('content')
<main>
    <!-- Hero Section -->
    <section class="min-h-screen flex items-center pt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="space-y-6 reveal-left">
                    <div class="space-y-2">
                        <h2 class="text-lg text-gray-600">I'm <span class="text-[#FF6B00]">Arjay</span></h2>
                        <h1 class="text-5xl font-bold text-gray-900">Web Designer<br/>& Developer</h1>
                    </div>
                    <p class="text-gray-600 max-w-lg">
                        I'm a UX/UI Designer and developer, co-founder of Visual Creative. I build clean, user-focused interfaces and bring them to life with code—still learning every day, but always delivering.
                    </p>
                    <button class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 transition-colors">
                        Download CV
                    </button>
                </div>
                <div class="relative reveal-right">
                    <img src="/images/profile.jpg" alt="Profile" class="w-full grayscale object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section id="projects" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Featured projects</h2>
                <a href="#" class="text-gray-600 hover:text-gray-900">SEE ALL</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Project Card 1 -->
                <div class="bg-gray-50 rounded-lg p-6 reveal-up">
                    <h3 class="text-xl font-semibold mb-4">Visual Creative</h3>
                    <p class="text-gray-600 mb-4">An e-commerce booking system and portfolio management for Photographers and Videographers.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-gray-200 rounded-full text-sm">Laravel</span>
                        <span class="px-3 py-1 bg-gray-200 rounded-full text-sm">PHP</span>
                        <span class="px-3 py-1 bg-gray-200 rounded-full text-sm">Tailwind</span>
                    </div>
                    <a href="#" class="block mt-4 text-blue-500 hover:text-blue-600">View Project →</a>
                </div>

                <!-- Project Card 2 -->
                <div class="bg-gray-50 rounded-lg p-6 reveal-up" style="animation-delay: 200ms;">
                    <h3 class="text-xl font-semibold mb-4">Fitness Boss Gym management system</h3>
                    <p class="text-gray-600 mb-4">A management system tailored for Fitnessbox Gym</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-gray-200 rounded-full text-sm">PHP</span>
                        <span class="px-3 py-1 bg-gray-200 rounded-full text-sm">MySQL</span>
                        <span class="px-3 py-1 bg-gray-200 rounded-full text-sm">Bootstrap</span>
                    </div>
                    <a href="#" class="block mt-4 text-blue-500 hover:text-blue-600">View Project →</a>
                </div>

                <!-- Project Card 3 -->
                <div class="bg-gray-50 rounded-lg p-6 reveal-up" style="animation-delay: 400ms;">
                    <h3 class="text-xl font-semibold mb-4">ChronoSync</h3>
                    <p class="text-gray-600 mb-4">An scheduling android app (this project has not been completed)</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-gray-200 rounded-full text-sm">Java</span>
                        <span class="px-3 py-1 bg-gray-200 rounded-full text-sm">Android Studio</span>
                    </div>
                    <a href="#" class="block mt-4 text-blue-500 hover:text-blue-600">View Project →</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
