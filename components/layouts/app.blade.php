<!DOCTYPE html>
<html lang="en">
    <head>
        @include('theme::partials.head')
    </head>
    <body class="bg-gray-100">
        <x-app.header></x-app.header>
        <div class="flex flex-col items-center justify-center w-full h-auto p-5">
            <div class="w-full max-w-2xl px-8 mx-auto">
                <main class="py-10">
                    {{ $slot }}
                </main>
            </div>
        </div>

        @livewire('notifications')
        @filamentScripts
        @livewireScripts
        {{ $javascript ?? '' }}
    </body>
</html>