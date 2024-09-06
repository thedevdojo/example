<?php
    use function Laravel\Folio\{name};
    name('blog.post');
?>

<x-layouts.marketing :title="$post->title">
    <x-back-button href="/">Back to The Blog</x-back-button>
    <article class="max-w-full pt-0 prose md:prose-lg prose-md">
        <h1>{{ $category->name }}</h1>
        {!! $post->body !!}
    </article>
</x-layouts.marketing>