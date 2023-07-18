<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link href="{{ asset('Eshopper/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Eshopper/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Eshopper/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('Eshopper/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('Eshopper/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('Eshopper/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('AddToCart/cart.css') }}" rel="stylesheet">
</head>

<body>
    @include('components.header.header-top')
    <div class="cart-wrapper">
        @include('components.cart_show')

    </div>
    @include('components.footer')
</body>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="{{ asset('vendors/sweetAlert2/sweetAlert2.js') }}"></script>
<script src="{{ asset('AddToCart/updateQuantity.js') }}"></script>
<script src="{{ asset('AddToCart/purchase.js') }}"></script>

</html>
