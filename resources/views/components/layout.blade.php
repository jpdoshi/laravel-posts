<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Laravel Posts</title>
    {{ Vite::fonts() }}
    @vite(['resources/css/app.css'])
</head>

<body class="antialiased min-h-screen max-w-screen flex flex-col overflow-x-hidden">
    <x-header></x-header>
    <main class="bg-rose-50/50 flex-1">
        {{ $slot }}
    </main>
</body>

</html>