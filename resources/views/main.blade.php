<!doctype html>
<html lang="en">
        <head>
            <!-- requiered meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width">
            <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
            <title> PARCIAL FINAL </title>
        </head>
    <body class="antialiased" >

        @include('partials.navbar')
        <div class="container">
            @yield('content')
            
                        
        </div>
        <!-- carga de archivos  java-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>