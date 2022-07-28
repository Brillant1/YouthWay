<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>YOUTH WAY </title>
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    @include('admin.layouts.css')
</head>
<body>

    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('images/youth.jpg') }}" alt="" style="width: 100%; height:100%;">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

       @include('admin.layouts.header')
        @include('admin.layouts.sidebar')

        @yield('content')

        @include('admin.layouts.footer')



    </div>

    @include('admin.layouts.js')



</body>
</html>
