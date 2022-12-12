<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito de compras</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    {{-- <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

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
    <link rel="stylesheet" href="{{ asset('vegefoods.asset/css/style.css') }}"> --}}

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-12">
                <div class="dropdown">
                    <button type="button" class="btn btn-success rounded-pill btn-lg-8" data-toggle="dropdown">
                        <i class="bi bi-cart"></i>  Cart   &nbsp;&nbsp; <span class="badge badge-pill badge-primary position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">{{ count((array) session('cart')) }}</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                        style="width: 450px; padding: 0px; border-color: #9DA0A2">
                        <ul class="list-group" style="margin: 20px;">
                            <div class="row total-header-section">
                                @php $total = 0 @endphp
                                @foreach ((array) session('cart') as $id => $details)
                                    @php $total += $details['price'] * $details['quantity'] @endphp
                                @endforeach
                                <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                    <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                                </div>
                            </div>
                            @if (session('cart'))
                                @foreach (session('cart') as $id => $details)
                                    <div class="row cart-detail">
                                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                            <img src="{{ asset('img') }}/{{ $details['photo'] }}" class="cart-img-top mx-auto" style="height: 150px; width: 150px;display: block;" />
                                        </div>
                                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                            {{ $details['product_name'] }}
                                            <span class="price text-info"> ${{ $details['price'] }}</span> <span
                                                class="count"> Quantity:{{ $details['quantity'] }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                    <a href="{{ route('cart') }}" class="btn btn-success rounded-pill btn-block">Ver todo</a>
                                </div>
                            </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </div>

    <br>
    <div class="container">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        @yield('content')
    </div>
@yield('scripts')
</body>

</html>
