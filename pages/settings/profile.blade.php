<?php
    use function Laravel\Folio\{name};
    name('settings.profile');
?>

<x-layouts.app>
	@volt('settings.profile')
		<x-app.settings-layout>
			<x-back-button href="/dashboard">Back to Dashboard</x-back-button>
			<h1 class="mb-3 text-4xl font-light">Profile Settings Page</h1>
			<p>You may pull over this functionality for the profile settings page from another theme.</p>
		</x-app.settings-layout>
	@endvolt
</x-layouts.app>
