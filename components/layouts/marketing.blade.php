<!DOCTYPE html>
<html lang="en">
    <head>
        @include('theme::partials.head')
    </head>
    <body>
        {{ $slot }}
        @livewire('notifications')
        @filamentScripts
        @livewireScripts
        {{ $javascript ?? '' }}
    </body>
</html>