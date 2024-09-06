<?php
    use function Laravel\Folio\{middleware, name};
    middleware('auth');
    name('dashboard');
?>

<x-layouts.app title="Dashboard">
    <div class="flex flex-col items-center justify-center w-screen h-screen">
        <h1 class="mb-3 text-4xl font-light">Dashboard</h1>
        <p>Welcome to your application dashboard</p>
        <ul class="inline-flex p-2 mt-5 font-medium bg-white divide-x rounded-md divide-x-gray-200">
            <li><a href="{{ route('dashboard') }}" class="p-4 hover:underline">Dashboard</a></li>
            <li><a href="/profile/{{ auth()->user()->username }}" class="p-4 hover:underline">Profile</a></li>
            <li><a href="/settings" class="p-4 hover:underline">Settings</a></li>
            <li><a href="/notifications" class="p-4 hover:underline">Notifications</a></li>
            <li><a href="{{ route('changelogs') }}"  class="p-4 hover:underline">Changelog</a></li>
            <li><a href="/logout"  class="p-4 hover:underline">Logout</a></li>
        </ul>
    </div>  
</x-layouts.app>