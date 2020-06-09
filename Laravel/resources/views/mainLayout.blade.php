<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-primi-passi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
        <script src="js/app.js"></script>
       
    </head>
    <body>
    <!--HEADER-------->
        <header>
            @include('header')
        </header>   
    <!--MAIN-------->
        <main class="main">
            <nav class="nav">
                @include('nav')
            </nav>
            <div class="content">
                @yield('content')
            </div>
        </main>
    <!--FOOTER-------->
        <footer>
            @include ('footer')
        </footer>
    </body>
</html>
