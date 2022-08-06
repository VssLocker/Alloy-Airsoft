<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite('resources/css/app.css')
    <title>Alloy Airsoft</title>
</head>
<body class="h-[100vh] flex flex-col justify-between">
    @include('includes.header')

    <main class="h-full">
        <x-pages.container>
            @yield('content')
        </x-pages.container>
    </main>
    
    @include('includes.footer')
</body>
</html>