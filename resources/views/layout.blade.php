<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        .activo a{
            color:red;
            text-decoration:none; 
            
        }
        .cust{
            padding:10px 50px;

        }
        a{
            text-decoration:none;
        }
        .table1{
            justify-content: center;
            display:flex;
        }
        thead{
            color:white;
        }
       
       
    </style>
</head>
<body>
    <nav>
        <table class="table1">
            @include('partials.nav')
        </table> 
    </nav>
    @yield('content')
</body>
</html>