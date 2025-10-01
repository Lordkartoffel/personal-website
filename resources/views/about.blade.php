@extends('layouts.app')

@section('title', 'About - Jannik Meier')
@section('content')
<div class="py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">About Me</h1>
            <p class="text-xl text-gray-600 dark:text-gray-300">Get to know me better</p>
        </div>

        <!-- Professional Summary -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Professional Summary</h2>
            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
            I'm a backend-focused developer with hands-on experience in both web and data-driven development.
            During my apprenticeship, I worked extensively with PHP, Laravel, and MySQL to build internal tools and form-based applications.
            I also gained experience with Docker, Git, and agile workflows like Scrum.
            </p>
            <p class="text-gray-600 dark:text-gray-300 leading-relaxed mt-4">
            After completing my apprenticeship, I transitioned to a new role where I now work primarily with Java and Spring. 
            My current focus lies in data processing and backend systems, where I analyze, transform, and manage data to support business operations.
            I'm passionate about building reliable, maintainable systems and enjoy solving real business problems through clean, efficient code.
            </p>
        </div>

        <!-- Skills Section -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Technical Skills</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Backend Skills -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Backend Development</h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 dark:text-gray-300">PHP</span>
                            <div class="w-32 bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 dark:text-gray-300">Laravel</span>
                            <div class="w-32 bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 70%"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 dark:text-gray-300">MySQL</span>
                            <div class="w-32 bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 65%"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 dark:text-gray-300">REST APIs</span>
                            <div class="w-32 bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 40%"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 dark:text-gray-300">Java</span>
                            <div class="w-32 bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 dark:text-gray-300">Docker</span>
                            <div class="w-32 bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 60%"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 dark:text-gray-300">Git</span>
                            <div class="w-32 bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Frontend Skills -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Frontend Development</h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 dark:text-gray-300">JavaScript</span>
                            <div class="w-32 bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 50%"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 dark:text-gray-300">Vue.js</span>
                            <div class="w-32 bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 20%"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 dark:text-gray-300">Tailwind CSS</span>
                            <div class="w-32 bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 60%"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600 dark:text-gray-300">HTML/CSS</span>
                            <div class="w-32 bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 60%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 