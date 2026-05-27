@props(['title'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Laravel Posts</title>
    {{ Vite::fonts() }}
    @vite(['resources/css/app.css'])

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
</head>

<body class="antialiased max-w-screen overflow-x-hidden">
    <div class="min-h-screen flex flex-col">
        <x-header></x-header>
        <main class="bg-slate-50 flex-1">
            {{ $slot }}
        </main>
    </div>
    <x-footer></x-footer>

    <script src="https://cdn.tiny.cloud/1/{{ env('TINYMCE_API_KEY') }}/tinymce/8/tinymce.min.js" referrerpolicy="origin"
        crossorigin="anonymous"></script>

    <script>
        tinymce.init({
            selector: 'textarea.tinymce',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>

    <script>
        // Create an instance of Notyf with customized clean layout values
        const notyf = new Notyf({
            duration: 4000,
            position: { x: 'right', y: 'bottom' },
            dismissible: true
        });

        // Fire Laravel flashes safely without scoping issues
        @if (session('success'))
            notyf.success("{{ session('success') }}");
        @endif

        @if (session('error'))
            notyf.error("{{ session('error') }}");
        @endif
    </script>
</body>

</html>