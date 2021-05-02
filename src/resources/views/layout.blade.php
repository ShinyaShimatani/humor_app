<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ユーモア図鑑</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet"><!--　←　触らないBootstrap v4.3.1　-->
        <script src="js/jquery-3.4.1.min.js"></script><!--　←　触らない　-->
        <script src="js/bootstrap.min.js"></script><!--　←　触らない　-->
        <script src="js/Chart.min.js"></script>  

        <style>
        h1{font-size:1.3rem;}
        .table-font { font-size:0.7rem; }
        @media screen and (max-width: 480px) { 
        	.sm-non { display:none; }
        } 
        </style>

        <link rel="stylesheet" 
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
              crossorigin="anonymous">

    </head>

    <body class="vh-100 d-flex justify-content-center text-center">
            <div class="w-75 mt-3">
                <div class="text-black-50 text-left border-bottom mt-5">
                ユーモア図鑑
                </div>

                <div>
                 @yield('content')
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
    </body>
</html>