<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Tailwind Style --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite('node_modules/flowbite/dist/flowbite.css')

    <title>{{ $title }}</title>
</head>

<body class="bg-main">
    @include('partials.navbar')

    @yield('container')

    @vite('node_modules/flowbite/dist/flowbite.js')
</body>

</html>
