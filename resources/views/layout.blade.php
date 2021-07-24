<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aurora CMS</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <nav class="container-fluid">
        <a href="#">Главная</a>
        <a href="#">Сервера</a>
        <a href="#">Правила</a>
        <a href="#">Войти</a>
    </nav>
    <header>Aurora CMS</header>

    <div class="container">
        <div class="row">
            <div class="col-9 content">
                @yield('content')
            </div>
            <aside class="col-3 py-3">
                Aside content
            </aside>
        </div>
    </div>
    <footer class="container-fluid py-2">
        by JCat / AuroraTeam
    </footer>

</body>

</html>
