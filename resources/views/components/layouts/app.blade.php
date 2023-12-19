<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <x-navbar/>
        <div class="container px-6">
            {{ $slot }}
        </div>
    </body>
</html>
