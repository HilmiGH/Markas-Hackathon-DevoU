<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- <script defer src="{{ asset('js/cdn.min.js') }}"></script> --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    {{-- <link href="/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="/css/aos.css" rel="stylesheet"> --}}
    @livewireStyles
</head>

<body>
    {{-- @include('layouts.navbar') --}}

    {{ $slot }}

    {{-- @include('layouts.footer') --}}
    @livewireScripts
</body>

</html>
