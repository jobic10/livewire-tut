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
    @livewireStyles

</head>
<body>
    @livewire('comments', ['newComment' => 'comments']) }}
    {{-- <livewire:comments newComment='I am props comment' /> --}}
    @livewireScripts
</body>
</html>
