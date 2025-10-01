@extends('layouts.app')

@section('title', 'Resources - Jannik Meier')

@section('content')

<div class="py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">Resources</h1>
            <p class="text-xl text-gray-600 dark:text-gray-300">Download my documents and certificates</p>
        </div>

        <!-- Documents Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
             <!-- CV/Resume -->
             <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <span class="text-xs bg-green-600 dark:bg-green-900 text-green-800 dark:text-green-200 px-2 py-1 rounded-full">PDF</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Resume/CV</h3>
                <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                    My professional resume with work experience, skills, and achievements.
                </p>
                <a href="#" class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-medium">
                    Download CV
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- The Certificate For My Completed Apprenticeship -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <span class="text-xs bg-blue-600 dark:bg-blue-900 text-blue-800 dark:text-blue-200 px-2 py-1 rounded-full">PDF</span>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">The Certificate For My Completed Apprenticeship</h3>
                <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                Here you can download the certificate for my completed apprenticeship.
                </p>
                <a href="#" class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-medium">
                    Download Certificate
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </a>
            </div>

    </div>
</div>
@endsection