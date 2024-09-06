<?php
    use function Laravel\Folio\{name};
    name('changelog');
    
    // use a dynamic layout based on whether or not the user is authenticated
    $layout = ((auth()->guest()) ? 'layouts.marketing' : 'layouts.app');
?>

<x-dynamic-component 
	:component="$layout"
>
    <x-back-button href="{{ route('changelogs') }}">Back to Changelog</x-back-button>
    <article class="max-w-full prose md:prose-lg prose-md">
        <h1>{{ $changelog->title }}</h1>
        {!! $changelog->body !!}
    </article>
</x-dynamic-component>