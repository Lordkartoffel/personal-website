<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jannik Meier</title>

    <link href="{{ asset('css/generalStyling.css') }}" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="siteWrapper">

        <x-navigation-bar />

        <div id="home">
            <x-home />
        </div>
        <div id="about">
            <x-about />
        </div>
        <div id="ressources">
            <x-ressources />
        </div>
        <div id="contact">
            <x-contact />
        </div>

    </div>

    <script src="{{ asset('js/navigationBar.js') }}"></script>
    <script src="{{ asset('js/emailSendButton.js') }}"></script>
</body>

</html>
