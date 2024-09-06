<?php
    use function Laravel\Folio\{middleware, name};
    middleware('auth');
    name('settings.invoices');
?>

<x-layouts.app>
    <x-app.settings-layout>
        <x-back-button href="/dashboard">Back to Dashboard</x-back-button>
        <h1 class="mb-3 text-4xl font-light">Invoices</h1>
        <p>You may pull over this functionality for the invoices page from another theme.</p>
    </x-app.settings-layout>
</x-layouts.app>
