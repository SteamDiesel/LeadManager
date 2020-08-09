<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LeadManager.test</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
    <div class="container h-screen">
        @if (Route::has('login'))
        <div class="container flex justify-end absolute h-20 items-center">
            @auth
            <a class="text-lg font-semibold" href="{{ url('/home') }}">Home</a>
            @else
            <a class="text-lg font-semibold" href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a class="ml-8 text-lg font-semibold" href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif
        <div class="flex flex-col justify-center items-center h-full">
            <h1 class="font-semibold text-3xl mb-4">
                Lead Manager
            </h1>
            <p>
                A bespoke lead management platform. Designed and developed by <a href="https://steamdiesel.dev/" class="text-gray-600 italic">steamdiesel.dev</a>
            </p>

        </div>
    </div>


</body>

</html>