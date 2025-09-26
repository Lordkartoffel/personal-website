@section('title', 'Home - Jannik Meier')

@section('content')
<div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <div class="text-center">
            <!-- Profile Image -->
            <div class="mb-8">
                <div class="mx-auto w-48 h-48 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white text-6xl font-bold shadow-lg">
                    YN
                </div>
            </div>

            <!-- Introduction -->
            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6">
                Hi, I'm <span class="text-blue-600 dark:text-blue-400">Jannik Meier</span>
            </h1>
            
            <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 mb-8 max-w-3xl mx-auto leading-relaxed">
            A software developer passionate about building efficient and maintainable applications. 
            I enjoy solving problems with clean code, and continuously learning to improve my craft.
            </p>

            <!-- Call to Action -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('about') }}" class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                    Learn More About Me
                </a>
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-3 border border-gray-300 dark:border-gray-600 text-base font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                    Get In Touch
                </a>
            </div>
        </div>
    </div>
</div>