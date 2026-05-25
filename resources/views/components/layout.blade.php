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

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/8/tinymce.min.js" referrerpolicy="origin"
        crossorigin="anonymous"></script>

    <script>
        tinymce.init({
            selector: 'textarea.tinymce',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
    </script>
</body>

</html>