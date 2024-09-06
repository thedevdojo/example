<?php

    use function Laravel\Folio\{middleware, name};
    use Livewire\Volt\Component;
    use Livewire\Attributes\Computed;
    name('wave.profile');

    new class extends Component
    {
        public $username;

        #[Computed]
        public function user()
        {
            return config('wave.user_model')::where('username', '=', $this->username)->with('roles')->firstOrFail();
        }
    }
?>

<x-dynamic-component :component="((auth()->guest()) ? 'layouts.marketing' : 'layouts.app')">
    @volt('wave.profile')
        <div class="text-center">
            <x-back-button href="/dashboard">Back to Dashboard</x-back-button>
            <h1 class="mb-3 text-4xl font-semibold">{{ $this->user->name }}'s Profile Page</h1>
            <p class="text-xs">File located at <code class="text-xs">{themefolder}/pages/profile/[username].blade.php</code></p>
        </div>
    @endvolt
</x-dynamic-component>