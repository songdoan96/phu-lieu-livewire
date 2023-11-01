<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Đăng nhập</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-muted-100 dark:bg-muted-900">
    {{ $slot }}
    @vite('resources/js/app.js')
    @livewireScripts
</body>

</html>
