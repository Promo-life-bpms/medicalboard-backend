<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Reckitt</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/img/favicon.ico')}}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stone-50">

    <!-- Page Heading -->
  <!--   @isset($header)
        <header class="bg-white ">
            <div class="w-full">
                {{ $header }}
            </div>
        </header>
    @endisset -->

    <!-- Page Content -->
    <main class="w-full ">
        @yield('content')
    </main>
    @yield('scripts')
</body>
</html>