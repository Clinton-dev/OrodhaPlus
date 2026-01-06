@php
    use Illuminate\Support\Facades\Vite;
@endphp
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Orodha Plus</title>
    @vite(['resources/js/app.js']);
</head>
<body class="bg-white">
    <div class=" max-w-5/10 mx-auto">
        <x-header />
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>
