<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- CookiesNotice -->
    <script type="text/javascript" src="https://cookiesnotice.com/cookie.js?skin=cookielaw2&amp;position=bottom_right&amp;box_radius=40&amp;accept_text=Accepteren&amp;morelink=http%3A%2F%2Fbarroc-intens.test%2Fprivacy&amp;learnmore=Meer%20informatie.&amp;msg=%5Bb%5DWij%20gebruiken%20cookies%20om%20de%20website%20goed%20te%20laten%20functioneren%20en%20te%20verbeteren.%5B%2Fb%5D%0A%3Cbr%3E%0A%3Cbr%3E%0A%0AJe%20kan%20op%20elk%20gewenst%20moment%20je%20voorkeuren%20inzien%20of%20wijzigen.%20%20Door%20het%20te%20gebruiken%20van%20de%20site%20ga%20je%20akkoord%20met%20onze%20%5Burl%3Dhttps%3A%2F%2Fcookiesnotice.com%2Fprivacy%5DPrivacy%20Policy%2C%5B%2Furl%5D%20%5Burl%3Dhttps%3A%2F%2Fcookiesnotice.com%2Ftos%5DTerms%20of%20Service%5B%2Furl%5D%20en%20onze%20%5Burl%3Dhttps%3A%2F%2Fcookiesnotice.com%2Fcookies%5DCookies%20Usage%5B%2Furl%5D.&amp;accept_background=ffd700&amp;link_color=ffd700"></script>    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
@include('components.header')
<main class="flex-shrink-0">
    @yield('img')
    <div class="container-md bg-white">
        @yield('content')
    </div>
</main>
@include('components.footer')
</body>
