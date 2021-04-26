<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="antialiased">
    <x-navbar></x-navbar>
    
    {{ $slot }}

    <x-footer></x-footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
