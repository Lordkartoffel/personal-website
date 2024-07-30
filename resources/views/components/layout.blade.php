<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic HTML Structure</title>

    <link href="{{ asset('css/navigationBar.css') }}" rel="stylesheet">
</head>
<body>
    
    <x-navigation-bar/>

    {{ $slot }}

    <script src="{{ asset('js/navigationBar.js') }}"></script>
</body>
</html>
