
    <div class="flex items-start w-full">
        <ul class="justify-start flex-shrink-0 block w-full text-left lg:w-48">
            <nav class="flex space-x-2 text-gray-600 lg:flex-col lg:space-x-0 lg:space-y-2">
                <h2 class="mb-2 text-sm font-semibold text-gray-500 uppercase">Settings</h2>
                <a href="{{ route('settings.profile') }}" @class(['underline', 'text-gray-900 font-bold' => Request::is('settings/profile')])>Profile</a>
                <a href="{{ route('settings.security') }}" @class(['underline', 'text-gray-900 font-bold' => Request::is('settings/security')])>Security</a>
                <a href="{{ route('settings.api') }}" @class(['underline', 'text-gray-900 font-bold' => Request::is('settings/api')])>API Keys</a>
                <h2 class="pt-5 mb-2 text-sm font-semibold text-gray-500 uppercase">Billing</h2>
                <a href="{{ route('settings.subscription') }}" @class(['underline', 'text-gray-900 font-bold' => Request::is('settings/subscription')])>Subscription</a>
                <a href="{{ route('settings.invoices') }}" @class(['underline', 'text-gray-900 font-bold' => Request::is('settings/invoices')])>Invoices</a>
            </nav>
        </ul>
        <div class="relative flex-1">
            {{ $slot}}
        </div>
    </div>