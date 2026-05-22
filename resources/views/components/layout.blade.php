@props(['title'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Laravel Posts</title>
    {{ Vite::fonts() }}
    @vite(['resources/css/app.css'])
</head>

<body class="antialiased max-w-screen overflow-x-hidden">
    <div class="min-h-screen flex flex-col">
        <x-header></x-header>
        <main class="bg-slate-50 flex-1">
            {{ $slot }}
        </main>
    </div>
    <x-footer></x-footer>
</body>

</html>