<?php
    
    use Filament\Forms\Components\TextInput;
    use Livewire\Volt\Component;
    use function Laravel\Folio\{middleware, name};
    use Filament\Forms\Concerns\InteractsWithForms;
    use Filament\Forms\Contracts\HasForms;
    use Filament\Forms\Form;
    use Filament\Notifications\Notification;
    
    middleware('auth');
    name('settings.subscription');

	new class extends Component
	{
        public function mount(): void
        {
            
        }
    }

?>

<x-layouts.app>
    @volt('settings.subscription') 
        <div class="flex flex-col w-full">
        <x-app.settings-layout>
            <x-back-button href="/dashboard">Back to Dashboard</x-back-button>
                @role('admin')
                    <h1 class="mb-3 text-4xl font-light">Subscriptions</h1>
                    <p>You are logged in as an admin and have full access. Authenticate with a different user and visit this page to see the subscription checkout process.</p>
                @notrole
                    <div class="relative w-full">
                        
                        <h1 class="mb-3 text-4xl font-light">Subscriptions</h1>
                        <p>Your subscription details</p>
                        @subscriber            
                            <p>You are currently subscribed to the {{ auth()->user()->plan()->name }} {{ auth()->user()->planInterval() }} Plan.</p>
                            <livewire:billing.update />
                        @endsubscriber

                        @notsubscriber
                            <p>No active subscriptions found. Please select a plan below.</p>
                            <livewire:billing.checkout />
                        @endnotsubscriber
                    </div>
                @endrole
        </x-app.settings-layout>
        </div>
    @endvolt
</x-layouts.app>


