<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $title ?? 'Example Theme' }}</title>
@filamentStyles
@livewireStyles
@vite(['resources/themes/example/assets/css/app.css', 'resources/themes/example/assets/js/app.js'])