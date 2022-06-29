<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="author" content="">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/web/images/favicon.png')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/web/css/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('assets/web/css/mmenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/web/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/web/css/style.css')}}" id="colors">
    <link rel="stylesheet" href="{{asset('assets/web/lib/toast/jquery.toast.min.css')}}" id="colors">
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&display=swap&subset=latin-ext,vietnamese"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet"
          type="text/css">
    <title> @yield('title') </title>

    <!-- css links -->
    @yield('css')

</head>

<body>


<div class="wrapper">

    <header id="header_part" class="fixed dashboard">

        @include('components.user.header')

    </header>

    <div class="clearfix"></div>

    <!-- Dashboard -->
    <div id="dashboard">
        <a href="#" class="utf_dashboard_nav_responsive"><i class="fa fa-reorder"></i> Dashboard Sidebar Menu</a>

        @include('components.user.sidebar')

        <div class="utf_dashboard_content">

            @yield('main')
        </div>


    </div>

</div>

<script src="{{asset('assets/web/scripts/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/chosen.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/slick.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/rangeslider.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/mmenu.js')}}"></script>
<script src="{{asset('assets/web/scripts/tooltips.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/color_switcher.js')}}"></script>
<script src="{{asset('assets/web/scripts/jquery_custom.js')}}"></script>

<script src="{{asset('assets/web/lib/toast/jquery.toast.min.js')}}"></script>


<script>
    $(document).ready(function () {

        @if(\Illuminate\Support\Facades\Session::has("Success"))
        $.toast({
            heading: 'Success',
            text: "{{ \Illuminate\Support\Facades\Session::get("Success") }}",
            icon: 'success',
        })
        @endif

        @if(\Illuminate\Support\Facades\Session::has("Error"))
        $.toast({
            heading: 'Error',
            text: "{{ \Illuminate\Support\Facades\Session::get("Error") }}",
            icon: 'error',
        })
        @endif

    });
</script>


<script>
    (function ($) {
        try {
            var jscr1 = $('.js-scrollbar');
            if (jscr1[0]) {
                const ps1 = new PerfectScrollbar('.js-scrollbar');

            }
        } catch (error) {
            console.log(error);
        }
    })(jQuery);
</script>

@yield('script')

</body>

