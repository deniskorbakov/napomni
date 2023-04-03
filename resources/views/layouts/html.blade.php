<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/bd53d87eef.js" crossorigin="anonymous"></script>
    <link rel="icon" href="icon/logo.svg">
    <link rel="stylesheet" href="css/style.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
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
