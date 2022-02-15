<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css"

        <!-- Styles -->
        <style>
            body{
                padding: 20px;
            }

            .articles{    
                width: 400px;
                border: 1px solid red;
                margin: 10px;
                padding-left: 5px;
            }

            .article{ 
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column
                margin: 10px;
                padding-left: 5px;
            }
            a{
                text-decoration: none;
                color: black;
            }
        </style>
    </head>
    <body>
        
        @yield('content')
    </body>
</html>
