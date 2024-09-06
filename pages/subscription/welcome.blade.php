<?php
    use function Laravel\Folio\{middleware, name};
    name('subscription.welcome');
    middleware('auth');
?>

<x-layouts.app>
    <div class="flex items-center justify-center w-screen h-screen">
        <div class="max-w-2xl mx-auto">
            <x-back-button href="/dashboard">Back to Dashboard</x-back-button>
            <h1 class="mb-3 text-4xl font-light">Successfully Purchased 🎉</h1>
            <div class="py-5 space-y-5">
                <p>This is your customer's successful purchase welcome screen. After a user upgrades their account they will be redirected to this page after a successful transaction.</p>
                <p>You can modify this view inside your theme folder at <code>pages/subscription/welcome</code>.</p>
            </div>
        </div>
    </div>
    <x-slot name="javascript">
        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>
        <script>
            confetti({
                particleCount: 100,
                spread: 70,
                origin: { y: 0.6 }
            });
        </script>
    </x-slot>
</x-layouts.app>