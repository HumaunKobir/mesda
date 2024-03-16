<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
*{
    margin: 0px;
    padding: 0px;
}
body,p span{
    font-family: 'Roboto', sans-serif;

}
h1,h2,h3,h4,h5,h6,a{
    font-family: 'Rubik', sans-serif;
}
body{
   background-color: #f1f4f1;
}
.header{
    padding: 10px;
}
.logo img{
    width: 80px;
    height: auto;
    border-radius: 50%;
}
.header-body{
    background-color:rgb(70, 31, 255);
    color: #fff;
    padding: 10px;
    margin-bottom: 5px;
    margin-top: 10px;
    border-radius: 5px;
}
.form-body{
    height: 100px;
}
.form-filed{
    background: rgb(251, 198, 219);
}
.details{
    background: rgb(219, 150, 18);
    border-radius: 5px;
}
.details p{
    margin-bottom: 0px;
}
</style>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'MESDA') }}</title>
         <!--Custom Style-->
         @vite(['resources/css/custom.css'])
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">

                {{ $slot }} 
                     
    </body>
</html>
