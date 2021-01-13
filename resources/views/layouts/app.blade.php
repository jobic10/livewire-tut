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
<body class="flex justify-center">
    <div class="flex w-full justify-center">
        <a href="/">Home</a>
        <a href="/login">Login</a>
    </div>
    @yield('content')
<div class="w-10/12 my-10 flex">
    {{--<div class="rounded border p-2 w-5/12">
        @livewire('tickets')
    </div>

    <div class="rounded border p-2 mx-2 w-7/12">
        @livewire('comments')
    </div>
    </div> --}}
    {{-- <livewire:comments newComment='I am props comment' /> --}}
</body>
</html>




