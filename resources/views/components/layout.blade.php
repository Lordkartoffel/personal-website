<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('siteTitle') - Jannik Meier</title>

    <link href="{{ asset('css/generalStyling.css') }}" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="siteWrapper">
        <x-navigation-bar/>
        @yield('contact')
    </div>
    
    
    <script src="{{ asset('js/navigationBar.js') }}"></script>
</body>
</html>
