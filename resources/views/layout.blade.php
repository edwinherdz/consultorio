<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.scss','resources/js/app.js'])
    <title>@yield('title','Pagina de Inicio')</title>
</head>
<body>
@include('partials.nav')
@include('partials.side_bar')

</body>
</html>