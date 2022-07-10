<!doctype html>
<html lang="en">

<head>

    <!--Start of Google Analytics script-->
    @if ($visibility->is_google_analytics == 1)
    {!! $commonsetting->google_analytics!!}
    @endif
    <!--End of Google Analytics script-->

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="@yield('meta-description')">
	<meta name="keywords" content="@yield('meta-keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--====== Title ======-->
    <title>{{ $setting->website_title }}</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/front/img/'.$setting->fav_icon) }}" type="image/png">
<!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&amp;display=swap"
          rel="stylesheet">

    <!--== All Magnific Popup CSS ==-->
    <link href="{{ asset('assets/front_new/css/magnific-popup.min.css') }}" rel="stylesheet"/>
    <!--== All Animate CSS ==-->
    <link href="{{ asset('assets/front_new/css/animate.min.css') }}" rel="stylesheet"/>
    <!--== All FontAwesome CSS ==-->
    <link href="{{ asset('assets/front_new/css/font-awesome.min.css') }}" rel="stylesheet"/>
    <!--== All Material Icons CSS ==-->
    <link href="{{ asset('assets/front_new/css/materialdesignicons.min.css') }}" rel="stylesheet"/>
    <!--== All Helper CSS ==-->
    <link href="{{ asset('assets/front_new/css/helper.min.css') }}" rel="stylesheet"/>
    <!--== All Revolution CSS ==-->
    <link href="{{ asset('assets/front_new/css/settings.css') }}" rel="stylesheet"/>
    <!--== All Slicknav CSS ==-->
        <link rel="stylesheet" href="{{ asset('assets/front/css/plugin.css') }}">

    <link href="{{ asset('assets/front_new/css/slicknav.min.css') }}" rel="stylesheet"/>
    <!--== All Timeline CSS ==-->
    <link href="{{ asset('assets/front_new/css/timeline.css') }}" rel="stylesheet"/>
    <!--== All Slick Slider CSS ==-->
    <link href="{{ asset('assets/front_new/css/slick.min.css') }}" rel="stylesheet"/>
    <!--== All BootStrap CSS ==-->
    <link href="{{ asset('assets/front_new/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!--== Main Style CSS ==-->
    <link href="{{ asset('assets/front_new/css/style.min.css') }}" rel="stylesheet"/>

    @yield('style')

    @if(request()->path() != '/')
    <style>
        .site-logo a img{
            filter: brightness(0) invert(1);
        }
    </style>
    @endif

   
    @if ($setting->is_dark == '1')
        <link rel="stylesheet" href="{{ asset('/') }}assets/front/css/dark.css">
    @endif

    @if($currentLang->direction == 'rtl')
	<!-- RTL css -->
	<link rel="stylesheet" href="{{ asset('/') }}assets/front/css/rtl.css">
	@endif

    <link rel="stylesheet" href="{{ asset('assets/front/') }}/css/dynamic-css.php?color={{ $commonsetting->base_color }}&gcolor1={{ $commonsetting->gcolor1 }}&gcolor2={{ $commonsetting->gcolor2 }}&gcolor3={{ $commonsetting->gcolor3 }}">


</head>

<body class=" @if($commonsetting->theme_version == 'theme7' || $commonsetting->theme_version == 'theme8' ) gradint_body @endif">

   <!--  @if ($visibility->is_preloader)
        <div id="preloader" style="background-color: {{ $commonsetting->preloader_bg_color }}">
            <div class="image">
                <img src="{{asset('assets/front/img/'. $commonsetting->preloader_icon )}}" alt="">
            </div>
        </div>
    @endif -->


    <!--====== HEADER PART START ======-->


    <!--====== HEADER PART ENDS ======-->

    @include('front.partials.menu')


	@yield('content')

     <!--    announcement banner section start   -->
    <a class="announcement-banner absulute" href="{{asset('assets/front/img/'.$setting->announcement)}}"></a>
    <!--    announcement banner section end   --> 

    <!--====== footer PART START ======-->

    @include('front.partials.footer')

   


	

    <input type="hidden" id="main_url" value="{{ route('front.index') }}">

   <!--=======================Javascript============================-->
<script src="{{ asset('assets/front_new/js/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/plugins/waypoint.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/plugins/counterup.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/plugins/instafeed.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/plugins/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/front_new/js/plugins/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/plugins/parallax.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/plugins/slick.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/plugins/magnific-popup.min.js') }}"></script>

<!--=== Active Js ===-->
<script src="{{ asset('assets/front_new/js/active.min.js') }}"></script>

<!-- REVOLUTION JS FILES -->
<script src="{{ asset('assets/front_new/js/revslider/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/revslider/jquery.themepunch.revolution.min.js') }}"></script>


<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('assets/front_new/js/revslider/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/revslider/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/revslider/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/revslider/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/revslider/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/revslider/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/revslider/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/revslider/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/front_new/js/revslider/extensions/revolution.extension.video.min.js') }}"></script>

<!--=== REVOLUTION JS ===-->
<script src="{{ asset('assets/front_new/js/revslider/rev-active.js') }}"></script>

   
    @yield('script')



@if($visibility->is_tawk_to	== 1)
{!!  $commonsetting->tawk_to !!}
@endif


@if($visibility->is_messenger	== 1)
{!!  $commonsetting->messenger !!}
@endif


@if (session()->has('success'))
    <script>
        $(function() {
            // Form Submit Success Message alert
            $message = '{{session('success')}}';

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            
            Toast.fire({
                icon: 'success',
                title: $message
            })
        });
    </script>
@endif

@if (session()->has('warning'))
    <script>
        $(function() {
            // Form Submit Success Message alert
            $message = '{{session('warning')}}';

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            
            Toast.fire({
                icon: 'warning',
                title: $message
            })
        });
    </script>
@endif

@if (session()->has('error'))
    <script>
        $(function() {
            // Form Submit Success Message alert
            $message = '{{session('error')}}';

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            
            Toast.fire({
                icon: 'error',
                title: $message
            })
        });
    </script>
@endif

</body>

</html>
