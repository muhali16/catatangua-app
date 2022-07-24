<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'CatatanGue' }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    @yield('container')
    @include('layouts.footer')


    
<script src="../node_modules/tw-elements/dist/js/index.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>