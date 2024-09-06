<?php
    use function Laravel\Folio\{name};
    name('blog');

    $posts = \Wave\Post::orderBy('created_at', 'DESC')->paginate(6);
    $categories = \Wave\Category::all();
?>

<x-layouts.marketing title="Blog">
    <div class="flex flex-col items-center justify-center w-screen h-screen">
        <div class="max-w-2xl mx-auto">
            <x-back-button href="/">Back Home</x-back-button>
            <h1 class="mb-3 text-4xl font-light">Blog</h1>
            @foreach($posts as $post)
                <a href="{{ $post->link() }}" class="block underline">{{ $post->title }}</a>
            @endforeach
        </div>
    </div>
</x-layouts.marketing>