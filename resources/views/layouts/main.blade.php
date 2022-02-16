<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- fonte do google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- CSS da aplicação -->


        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                   <a href="/" class="navbar-brand">
                       <img src="/img/logo.png" alt="Agro-exped">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/ordem" class="nav-link"> Ordem de carga</a>
                        </li>    
                        <li class="nav-item">
                            <a href="/programacao" class="nav-link"> Programação</a>
                        </li>    
                        <li class="nav-item">
                            <a href="/comprovante" class="nav-link"> Comprovante</a>
                        </li>    
                    </ul>   
                </div>   
            </nav>     

        </header>

        @yield('content')
        <footer>
            <p> AV1 - PROGRAMAÇÃO WEB &copy; 2022</p>
        </footer>
    </body>
</html>