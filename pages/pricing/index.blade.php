<?php
    use function Laravel\Folio\{middleware, name};
    name('pricing');
?>

<x-layouts.marketing>
    <div class="flex flex-col items-center justify-center w-screen h-screen">
        <div class="max-w-2xl mx-auto">
            <x-back-button href="/">Back Home</x-back-button>
            <h1 class="mb-3 text-4xl font-light">Pricing</h1>
            <div class="grid grid-cols-3 gap-5 mx-auto">
            @foreach(Wave\Plan::where('active', 1)->get() as $plan)
                <div class="w-full p-10 bg-gray-100">{{ $plan->name }}</div>
            @endforeach
            </div>
        </div>
    </div>  
</x-layouts.marketing>
