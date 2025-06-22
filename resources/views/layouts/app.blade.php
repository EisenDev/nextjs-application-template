<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/scrollreveal"></script>
</head>
<body class="bg-white">
    <nav class="fixed top-0 w-full bg-white/80 backdrop-blur-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-xl font-semibold">Know me</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#projects" class="text-gray-800 hover:text-gray-600">Projects</a>
                    <a href="#designs" class="text-gray-800 hover:text-gray-600">Designs</a>
                    <a href="#certificates" class="text-gray-800 hover:text-gray-600">Certificates</a>
                    <a href="#blog" class="text-gray-800 hover:text-gray-600">Blog</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    @vite('resources/js/app.js')
</body>
</html>
