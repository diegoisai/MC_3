<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/style.css') }}">


    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

        {{-- estilos de bootstrap --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- iconos de bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body class="bg-dark">
   
<div class="container">
    @yield('content')
</div>
   
</body>
</html>