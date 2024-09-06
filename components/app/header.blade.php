<header class="relative flex flex-col items-center justify-between w-full p-5 space-y-5">
    <a href="/"><x-logo class="h-7" /></a>
    <ul class="inline-flex p-2 font-medium bg-white divide-x rounded-md divide-x-gray-200">
        <li><a href="{{ route('dashboard') }}" class="p-4 hover:underline">Dashboard</a></li>
        <li><a href="/profile/{{ auth()->user()->username }}" class="p-4 hover:underline">Profile</a></li>
        <li><a href="/settings" class="p-4 hover:underline">Settings</a></li>
        <li><a href="/notifications" class="p-4 hover:underline">Notifications</a></li>
        <li><a href="{{ route('changelogs') }}"  class="p-4 hover:underline">Changelog</a></li>
        <li><a href="/logout"  class="p-4 hover:underline">Logout</a></li>
    </ul>
</header>