<?php
    use function Laravel\Folio\{name};
    name('blog.category');
?>

<x-layouts.marketing title="Blog Category Page">
    <x-back-button href="/blog">Back to the blog</x-back-button>
    <h1 class="mb-3 text-4xl font-light">{{ $category->name }}</h1>
    @foreach($category->posts()->paginate(6) as $post)
        <a href="{{ $post->link() }}" class="block underline">{{ $post->title }}</a>
    @endforeach
</x-layouts.marketing>