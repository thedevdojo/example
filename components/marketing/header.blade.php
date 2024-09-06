<header class="relative flex items-center justify-between">
    <a href="/"><x-logo class="h-7" /></a>

    <div class="relative flex items-center space-x-5">
        <nav>
            <a href="{{ route('home') }}" class="px-2">Home</a>
            <a href="{{ route('blog') }}" class="px-2">Blog</a>
            <a href="/pricing"  class="px-2">Pricing</a>
        </nav>
        @auth
            <x-button tag="a" href="{{ route('dashboard') }}">View Dashboard</x-button>
        @else
            <div class="flex items-center justify-start space-x-3">
                <x-filament::button tag="a" href="/login" color="gray">Login</x-filament::button>
                <x-filament::button tag="a" href="/register">Regsiter</x-filament::button>
            </div>
        @endif
    </div>
</header>