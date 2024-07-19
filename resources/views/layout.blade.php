<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title')</title>
    <style>
        .activo a{
            color:red !important;
            text-decoration:none;
        }
        a{
            color:blue !important;
            text-decoration:none;
        }
        .table{
            justify-content: center;
            text-align:center;
        }
    </style>
</head>
<body>
    <nav>
        <table class="table">
            @include('partials.nav')
        </table> 
    </nav>
    @include('partials.sesion-estado')
    @yield('content')
</body>
</html>