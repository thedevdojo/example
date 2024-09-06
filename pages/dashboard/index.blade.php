<?php
    use function Laravel\Folio\{middleware, name};
    middleware('auth');
    name('dashboard');
?>

<x-layouts.app title="Dashboard">
    <div class="text-center">
        <h1 class="mb-3 text-4xl font-semibold">Dashboard</h1>
        <p>Welcome to your application dashboard</p>
    </div>
</x-layouts.app>