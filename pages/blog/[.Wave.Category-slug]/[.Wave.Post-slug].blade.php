<?php
    use function Laravel\Folio\{name};
    name('blog.post');
?>

<x-layouts.marketing :title="$post->title">

    <div class="max-w-3xl mx-auto">
        <div class="p-10 pb-0">
            <x-back-button href="/">Back to The Blog</x-back-button>
        </div>
        <article class="max-w-full p-10 pt-0 prose md:prose-lg prose-md">
            <h1>{{ $category->name }}</h1>
            {!! $post->body !!}
        </article>
    </div>

</x-layouts.marketing>
