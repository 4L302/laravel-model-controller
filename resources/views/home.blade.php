<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Model Controller</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main class="bg-light">
        <div class="container">
            <h1 class="py-3 text-center">Movie List</h1>
            <div>
                @foreach($movies as $movie)
                    <li>
                        {{ $movie->title }}
                    </li>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>