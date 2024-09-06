<!DOCTYPE html>
<html lang="en">
    <head>
        @include('theme::partials.head')
    </head>
    <body>
        <div class="flex flex-col items-center justify-center w-full h-auto p-5">
            <div class="w-full max-w-2xl mx-auto">
                <x-marketing.header></x-marketing.header>
                <main class="py-20">
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