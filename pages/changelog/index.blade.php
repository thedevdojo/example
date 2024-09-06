<?php
    use function Laravel\Folio\{name};
    name('changelogs');

    $logs = \Wave\Changelog::orderBy('created_at', 'desc')->paginate(10);

    // use a dynamic layout based on whether or not the user is authenticated
    $layout = ((auth()->guest()) ? 'layouts.marketing' : 'layouts.app');
?>

<x-dynamic-component 
	:component="$layout"
>
    <x-back-button href="/dashboard">Back to Dashboard</x-back-button>
    <h1 class="mb-3 text-4xl font-light">Changelog</h1>
    @foreach($logs as $changelog)
        <a href="{{ route('changelog', ['changelog' => $changelog->id]) }}" class="block underline">{{ $changelog->title }}</a>
    @endforeach

</x-dynamic-component>