<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$titulo}}</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
    @include('sweetalert::alert')
    @include('shared/navbar')
    @yield('contenido')
    
    <script src="{{mix('js/app.js')}}"></script>
</body>
</html>