<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouthWay</title>
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
    <link rel="stylesheet" href="{{ asset('admin/css/magnific-popup.css') }}">
    <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>

</head>
<body>

    @include('partials.header')

    @yield('content')

    @include('partials.footer1')


    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>

    <script src="https://cdn.kkiapay.me/k.js"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/jsAccueil.js') }}"></script>


</body>
</html>
