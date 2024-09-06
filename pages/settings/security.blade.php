<?php
    use function Laravel\Folio\{middleware, name};
    middleware('auth');
    name('settings.security');
?>

<x-layouts.app>
    @volt('settings.security') 
        <x-app.settings-layout>
            <x-back-button href="/dashboard">Back to Dashboard</x-back-button>
            <h1 class="mb-3 text-4xl font-light">Security Settings</h1>
            <p>You may pull over this functionality for the security settings page from another theme.</p>
        </x-app.settings-layout>
    @endvolt
</x-layouts.app>
