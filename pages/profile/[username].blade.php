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
        <div class="flex items-center justify-center w-screen h-screen">
            <div class="max-w-2xl mx-auto">
                <x-back-button href="/dashboard">Back to Dashboard</x-back-button>
                <h1 class="mb-3 text-4xl font-light">{{ $this->user->name }}'s Profile Page</h1>
            </div>
        </div>
    @endvolt
</x-dynamic-component>