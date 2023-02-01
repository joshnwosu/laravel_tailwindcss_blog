<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        {{-- Style --}}
        {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>
        <div class="container">
        @yield('content')

        @if (session()->has('success'))
            <div class="alret alert-success">
                {{session()->get('success')}}
            </div>
        @endif
        </div>
    </body>
</html>
