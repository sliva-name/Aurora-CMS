<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $seo['title'] ?: env('APP_NAME') }}</title>
    <meta name="description" content="{{ $seo['description'] }}">
    <meta name="keywords" content="{{ $seo['keywords'] }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Aurora CMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('index') }}">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Сервера</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Правила</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Войти</a>
                    </li>
                </ul>
            </div>
        </div>
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
