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
    </div>
</div>
@endsection 