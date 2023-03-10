<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Comics @yield('title', 'Welcome')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!--Link Font Awesome-->
    <script src="https://kit.fontawesome.com/641e4c79bb.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    <!-- /header -->

    <main>
        @yield('content')
    </main>
    <!-- /main -->

    @include('partials.footer')
    <!-- /footer -->
</body>

</html>