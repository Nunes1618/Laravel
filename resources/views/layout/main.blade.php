<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('yield')</title>

        <!-- fonte do google -->
        <link href="https://fonts.googleapis.com/css2?family=Itim" rel="stylesheet">

        <!-- css bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        
        <!-- css da aplicação -->

        <link rel="stylesheet" href="/css/style.css">
        <script src="js/script.js"></script>
        <img src="/img/acimagem.jpg/" alt="Ac creed">
    </head>
    <body>
        @yield('content')
        <footer>
            <p>AC Events &copy; 2023</p>
        </footer>
    </body>
</html>