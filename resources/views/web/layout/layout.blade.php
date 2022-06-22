<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="author" content="">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/web/css/stylesheet.css')}}">
    <link rel="stylesheet" href="{{asset('assets/web/css/mmenu.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css">
    <link rel="stylesheet" href="{{asset('assets/web/css/style.css')}}">


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


    @include('components.web.header')

    <div class="clearfix"></div>
    @yield('main')

    @include('components.web.footer')


</div>


@yield('script')


<!-- Scripts -->
<script src="{{asset('assets/web/scripts/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/chosen.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/slick.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/rangeslider.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/bootstrap-select.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/mmenu.js')}}"></script>
<script src="{{asset('assets/web/scripts/tooltips.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/color_switcher.js')}}"></script>
<script src="{{asset('assets/web/scripts/jquery_custom.js')}}"></script>

<script>
    var tpj = jQuery;
    var revapi4;
    tpj(document).ready(function () {
        if (tpj("#utf_rev_slider_block").revolution == undefined) {
            revslider_showDoubleJqueryError("#utf_rev_slider_block");
        } else {
            revapi4 = tpj("#utf_rev_slider_block").show().revolution({
                sliderType: "standard",
                jsFileLocation: "scripts/",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 6000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "on",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style: "zeus",
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        tmp: '<div class="tp-title-wrap"></div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 40,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 40,
                            v_offset: 0
                        }
                    }
                    ,
                    bullets: {
                        enable: false,
                        hide_onmobile: true,
                        hide_under: 600,
                        style: "hermes",
                        hide_onleave: true,
                        hide_delay: 200,
                        hide_delay_mobile: 1200,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 30,
                        space: 6,
                        tmp: ''
                    }
                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "80%"
                },
                responsiveLevels: [1200, 992, 768, 480],
                visibilityLevels: [1200, 992, 768, 480],
                gridwidth: [1180, 1024, 778, 480],
                gridheight: [565, 900, 800, 800],
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2200,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 25, 47, 48, 49, 50, 51, 55],
                    type: "mouse",
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });
</script>

<script src="{{asset('assets/web/scripts/extensions/themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/extensions/themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/extensions/revolution.extension.kenburn.min.js')}} "></script>
<script src="{{asset('assets/web/scripts/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/web/scripts/extensions/revolution.extension.video.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>

@if(session('message'))
    <div class="card-header justify-content-center">
        <p style="background-color: #fd8e8e" class="text-white text-center ">{{session('message')}}</p>
    </div>
@endif


@if(Session::has('Error'))

    <script>
        $.toast({
            heading: 'Error',
            text: '{{ Session::get('Error') }}',
            icon: 'error',
            position: 'bottom-right',
            loader: true,        // Change it to false to disable loader
            loaderBg: '#9EC600'  // To change the background
        })
    </script>

@endif

@if(Session::has('Success'))

    <script>
        $.toast({
            heading: 'Success',
            text: '{{ Session::get('Success') }}',
            icon: 'info',
            position: 'bottom-right',
            loader: true,        // Change it to false to disable loader
            loaderBg: '#9EC600'  // To change the background
        })
    </script>

@endif


</body>


</html>
