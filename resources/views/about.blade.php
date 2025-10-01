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

        <!-- Experience Timeline -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Work Experience</h2>
            
            <div class="space-y-6">
                <div class="border-l-4 border-blue-600 pl-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Junior Software Developer</h3>
                        <span class="text-sm text-gray-500 dark:text-gray-400">2024 - Present</span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-2">Delta Software Technology GmbH</p>
                    <p class="text-gray-600 dark:text-gray-300">
                        Lead development of enterprise web applications using Laravel and Vue.js. 
                        Mentored junior developers and implemented best practices for code quality.
                    </p>
                </div>

                <div class="border-l-4 border-blue-600 pl-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Trainee</h3>
                        <span class="text-sm text-gray-500 dark:text-gray-400">2021 - 2024</span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-2">Apprenticeship</p>
                    <p class="text-gray-600 dark:text-gray-300">
                    Pivoting towards my true passion, I immersed myself in the world of web development during the start of my second apprenticeship. 
                    From PHP, JS, to CSS, I not only embraced the digital landscape but also improved my professional communication skills within my company.
                    </p>
                </div>

                <div class="border-l-4 border-blue-600 pl-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Student</h3>
                        <span class="text-sm text-gray-500 dark:text-gray-400">2020 - 2021</span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-2">Technical College</p>
                    <p class="text-gray-600 dark:text-gray-300">
                    After I received my German high school diploma, I was unsure about what to do next.
                    I enjoy working with my hands, but I also like programming.
                    At first, I decided to study wood technology, hoping it would be a good fit.
                    However, I soon realized that it wasn’t the right path for me.
                    </p>
                </div>

                <div class="border-l-4 border-blue-600 pl-6">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Student</h3>
                        <span class="text-sm text-gray-500 dark:text-gray-400">2007 - 2020</span>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 mb-2">School</p>
                    <p class="text-gray-600 dark:text-gray-300">
                    Mastering the intricacies of education within the renowned German school system laid the foundation for my future pursuits.
                    The journey through this academic landscape equipped me with the knowledge and discipline to face the challenges ahead.
                    </p>
                </div>
            </div>
        </div>

        <!-- Personal Facts -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Personal Facts</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center">
                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 dark:text-white">Sport Enthusiast</h3>
                        <p class="text-gray-600 dark:text-gray-300">Working out daily helps me stay disciplined, focused, and mentally sharp.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center">
                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 dark:text-white">Problem Solver</h3>
                        <p class="text-gray-600 dark:text-gray-300">I love tackling complex technical challenges.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center">
                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 dark:text-white">Continuous Learner</h3>
                        <p class="text-gray-600 dark:text-gray-300">Always exploring new technologies and best practices.</p>
                    </div>
                </div>

                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center">
                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 dark:text-white">Team Player</h3>
                        <p class="text-gray-600 dark:text-gray-300">I believe in collaboration and knowledge sharing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 