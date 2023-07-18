
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireStyles
    @vite(['resources/css/app.scss','resources/js/app.js'])
    <title>@yield('title','Pagina de Inicio')</title>
</head>
<body>

@include('partials.nav')
@include('partials.side_bar')
@livewireScripts

</body>
</html>