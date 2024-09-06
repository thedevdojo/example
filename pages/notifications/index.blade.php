<?php
    use function Laravel\Folio\{middleware, name};
	use Livewire\Volt\Component;
    name('notifications');
    middleware('auth');

	new class extends Component{

		public $notifications_count;
		public $unreadNotifications;
		 
		public function mount(){
			$this->updateNotifications();
		}

		public function delete($id){
			$notification = auth()->user()->notifications()->where('id', $id)->first();
			if ($notification){
				$notification->delete();
			}
			$this->updateNotifications();
		}

		public function updateNotifications(){
			$this->setUnreadNotifications = $this->unreadNotifications = auth()->user()->unreadNotifications->all();  
			$this->notifications_count = auth()->user()->unreadNotifications->count();}
		}
?>

<x-layouts.app>
	@volt('notifications')
		<div class="w-full">
			<x-back-button href="/dashboard">Back to Dashboard</x-back-button>
			<h1 class="mb-3 text-4xl font-light">Notifications</h1>
			<div class="flex flex-col items-start space-y-5">
				@forelse ($unreadNotifications as $index => $notification)
					@php $notification_data = (object)$notification->data; @endphp	
					<a href="{{ @$notification_data->link }}" class="hover:underline">{{ @$notification_data->body }}</a>
					<span wire:click="delete('{{ $notification->id }}')" class="p-2 bg-gray-200 cursor-pointer hover:underline">Mark as Read</span>
				@empty
					<p class="text-gray-500">No Notifications</p>
				@endforelse
			</div>
		</div>
	@endvolt
</x-layouts.app>