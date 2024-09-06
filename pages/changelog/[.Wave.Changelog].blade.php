<?php
    use function Laravel\Folio\{name};
    name('changelog');
    
    // use a dynamic layout based on whether or not the user is authenticated
    $layout = ((auth()->guest()) ? 'layouts.marketing' : 'layouts.app');
?>

<x-dynamic-component 
	:component="$layout"
>
    <div class="max-w-3xl mx-auto">
        <div class="p-10 pb-0">
            <x-back-button href="{{ route('changelogs') }}">Back to Changelog</x-back-button>
        </div>
        <article class="max-w-full p-10 pt-0 prose md:prose-lg prose-md">
            <h1>{{ $changelog->title }}</h1>
            {!! $changelog->body !!}
        </article>
    </div>
</x-dynamic-component>