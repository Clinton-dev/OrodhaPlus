@php
    use Illuminate\Support\Facades\Vite;
@endphp
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Orodha Plus</title>
</head>
<body class="bg-white">
    <div class="">
        <div>
            <img src="{{ Vite::asset('resources/images/Logo.svg')}}" alt="orodha plus logo">
            <div>
                <h2>My Task Board</h2>
                <p>Task to keep organized</p>
            </div>
        </div>
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>
