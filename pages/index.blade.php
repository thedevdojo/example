<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Theme</title>
    @vite(['resources/themes/example/assets/css/app.css', 'resources/themes/example/assets/js/app.js'])
    @filamentStyles
    @livewireStyles
</head>
<body class="flex justify-center items-center w-screen h-screen">
    <div class="relative text-center">
        <h1 class="mb-3 text-4xl font-light">Example Theme</h1>
        <p>This is a simple example of a blank theme. <a href="https://devdojo.com/wave/docs" target="_blank" class="underline">Click here to view the docs</a></p>
    </div>
</body>
</html>
