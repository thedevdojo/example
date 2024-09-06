<?php
    use function Laravel\Folio\{middleware, name};
    middleware('auth');
    name('settings.api');
?>

<x-layouts.app>
    @volt('settings.api') 
        <x-app.settings-layout>
			<x-back-button href="/dashboard">Back to Dashboard</x-back-button>
			<h1 class="mb-3 text-4xl font-light">API keys</h1>
			<p>You may pull over the functionality for the API Keys here from another theme.</p>
		</x-app.settings-layout>
    @endvolt
</x-layouts.app>
