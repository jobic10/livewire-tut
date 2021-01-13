<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Livewire</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    @livewireStyles
    @livewireScripts
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body class="flex flex-wrap justify-center">
    <div class="flex w-full justify-left px-4 bg-yellow-900 text-white">
        <a class="mx-3 py-4" href="/">Home</a>
        <a  class="mx-3 py-4" href="/login">Login</a>
    </div>
    <div class="w-4/6 justify-left">
        @yield('content')
    </div>
    <div class="w-10/12 my-10 flex">

    </div>
</body>
</html>




