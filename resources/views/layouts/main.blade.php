<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/style.css">


</head>

<body class="antialiased">


    <header>
        <nav class="nav_desktop">
            <a href="/" class="nav_logo">LOGO</a>

            <ul class="list_item">
                <li class="item"><a href="/" class="nav_link">home</a></li>
                <li class="item"><a href="/" class="nav_link">produtc</a></li>
                @auth
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" class="nav-link"
                                onclick="event.preventDefault();
                    this.closest('form').submit();">Sair</a>
                        </form>
                    </li>

                @endauth
                @guest
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">Entrar</a>
                    </li>
                @endguest
            </ul>
        </nav>
    </header>


    <main>

        <div class="container-fluid">
            <div class="content">

                @yield('content')
            </div>
        </div>

    </main>


    <footer>
        <p>HDC Events &copy; 2022</p>
    </footer>

    <script src="/js/app.js"></script>
</body>

</html>
