<!DOCTYPE html>
<html lang="en">
    <head>
        @include('theme::partials.head')
    </head>
    <body class="bg-gray-100">
        {{ $slot }}

        @livewire('notifications')
        @filamentScripts
        @livewireScripts
        {{ $javascript ?? '' }}
    </body>
</html>