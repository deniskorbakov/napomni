<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/bd53d87eef.js" crossorigin="anonymous"></script>
    <link rel="icon" href="icon/logo.svg">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="d-flex flex-column min-vh-100">

@include('includes.header')

<mai>
    @yield('main')
</mai>

@include('includes.footer')

<script src="js/three.r134.min.js"></script>
<script src="js/vanta.fog.min.js"></script>
<script>
    VANTA.FOG({
        el: "#background-sky",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        highlightColor: 0x68b6e1,
        midtoneColor: 0x52afdc,
        lowlightColor: 0xd9efa
    })
</script>
</body>
</html>
