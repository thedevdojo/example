<?php
    use function Laravel\Folio\{middleware, name};
    name('pricing');
?>

<x-layouts.marketing>
    <div class="relative w-full">
        <x-back-button href="/">Back Home</x-back-button>
        <h1 class="mb-3 text-4xl font-light">Pricing</h1>
        <div class="grid grid-cols-3 gap-5 mx-auto">
        @foreach(Wave\Plan::where('active', 1)->get() as $plan)
            <div class="w-full p-10 bg-gray-100">{{ $plan->name }}</div>
        @endforeach
        </div>
    </div>
</x-layouts.marketing>
