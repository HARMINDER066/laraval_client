<!doctype html>
<html lang="en">

<head>

    <!--Start of Google Analytics script-->
    <?php if($visibility->is_google_analytics == 1): ?>
    <?php echo $commonsetting->google_analytics; ?>

    <?php endif; ?>
    <!--End of Google Analytics script-->

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="<?php echo $__env->yieldContent('meta-description'); ?>">
	<meta name="keywords" content="<?php echo $__env->yieldContent('meta-keywords'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!--====== Title ======-->
    <title><?php echo e($setting->website_title); ?></title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/front/img/'.$setting->fav_icon)); ?>" type="image/png">
<!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&amp;display=swap"
          rel="stylesheet">

    <!--== All Magnific Popup CSS ==-->
    <link href="<?php echo e(asset('assets/front_new/css/magnific-popup.min.css')); ?>" rel="stylesheet"/>
    <!--== All Animate CSS ==-->
    <link href="<?php echo e(asset('assets/front_new/css/animate.min.css')); ?>" rel="stylesheet"/>
    <!--== All FontAwesome CSS ==-->
    <link href="<?php echo e(asset('assets/front_new/css/font-awesome.min.css')); ?>" rel="stylesheet"/>
    <!--== All Material Icons CSS ==-->
    <link href="<?php echo e(asset('assets/front_new/css/materialdesignicons.min.css')); ?>" rel="stylesheet"/>
    <!--== All Helper CSS ==-->
    <link href="<?php echo e(asset('assets/front_new/css/helper.min.css')); ?>" rel="stylesheet"/>
    <!--== All Revolution CSS ==-->
    <link href="<?php echo e(asset('assets/front_new/css/settings.css')); ?>" rel="stylesheet"/>
    <!--== All Slicknav CSS ==-->
        <link rel="stylesheet" href="<?php echo e(asset('assets/front/css/plugin.css')); ?>">

    <link href="<?php echo e(asset('assets/front_new/css/slicknav.min.css')); ?>" rel="stylesheet"/>
    <!--== All Timeline CSS ==-->
    <link href="<?php echo e(asset('assets/front_new/css/timeline.css')); ?>" rel="stylesheet"/>
    <!--== All Slick Slider CSS ==-->
    <link href="<?php echo e(asset('assets/front_new/css/slick.min.css')); ?>" rel="stylesheet"/>
    <!--== All BootStrap CSS ==-->
    <link href="<?php echo e(asset('assets/front_new/css/bootstrap.min.css')); ?>" rel="stylesheet"/>
    <!--== Main Style CSS ==-->
    <link href="<?php echo e(asset('assets/front_new/css/style.min.css')); ?>" rel="stylesheet"/>

    <?php echo $__env->yieldContent('style'); ?>

    <?php if(request()->path() != '/'): ?>
    <style>
        .site-logo a img{
            filter: brightness(0) invert(1);
        }
    </style>
    <?php endif; ?>

   
    <?php if($setting->is_dark == '1'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('/')); ?>assets/front/css/dark.css">
    <?php endif; ?>

    <?php if($currentLang->direction == 'rtl'): ?>
	<!-- RTL css -->
	<link rel="stylesheet" href="<?php echo e(asset('/')); ?>assets/front/css/rtl.css">
	<?php endif; ?>

    <link rel="stylesheet" href="<?php echo e(asset('assets/front/')); ?>/css/dynamic-css.php?color=<?php echo e($commonsetting->base_color); ?>&gcolor1=<?php echo e($commonsetting->gcolor1); ?>&gcolor2=<?php echo e($commonsetting->gcolor2); ?>&gcolor3=<?php echo e($commonsetting->gcolor3); ?>">


</head>

<body class=" <?php if($commonsetting->theme_version == 'theme7' || $commonsetting->theme_version == 'theme8' ): ?> gradint_body <?php endif; ?>">

   <!--  <?php if($visibility->is_preloader): ?>
        <div id="preloader" style="background-color: <?php echo e($commonsetting->preloader_bg_color); ?>">
            <div class="image">
                <img src="<?php echo e(asset('assets/front/img/'. $commonsetting->preloader_icon )); ?>" alt="">
            </div>
        </div>
    <?php endif; ?> -->


    <!--====== HEADER PART START ======-->


    <!--====== HEADER PART ENDS ======-->

    <?php echo $__env->make('front.partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


	<?php echo $__env->yieldContent('content'); ?>

     <!--    announcement banner section start   -->
    <a class="announcement-banner absulute" href="<?php echo e(asset('assets/front/img/'.$setting->announcement)); ?>"></a>
    <!--    announcement banner section end   --> 

    <!--====== footer PART START ======-->

    <?php echo $__env->make('front.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   


	

    <input type="hidden" id="main_url" value="<?php echo e(route('front.index')); ?>">

   <!--=======================Javascript============================-->
<script src="<?php echo e(asset('assets/front_new/js/modernizr-3.6.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/jquery-migrate.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/plugins/waypoint.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/plugins/counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/plugins/instafeed.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/plugins/jquery.appear.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/plugins/jquery.slicknav.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/plugins/parallax.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/plugins/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/plugins/magnific-popup.min.js')); ?>"></script>

<!--=== Active Js ===-->
<script src="<?php echo e(asset('assets/front_new/js/active.min.js')); ?>"></script>

<!-- REVOLUTION JS FILES -->
<script src="<?php echo e(asset('assets/front_new/js/revslider/jquery.themepunch.tools.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/revslider/jquery.themepunch.revolution.min.js')); ?>"></script>


<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="<?php echo e(asset('assets/front_new/js/revslider/extensions/revolution.extension.actions.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/revslider/extensions/revolution.extension.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/revslider/extensions/revolution.extension.kenburn.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/revslider/extensions/revolution.extension.layeranimation.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/revslider/extensions/revolution.extension.migration.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/revslider/extensions/revolution.extension.navigation.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/revslider/extensions/revolution.extension.parallax.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/revslider/extensions/revolution.extension.slideanims.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/front_new/js/revslider/extensions/revolution.extension.video.min.js')); ?>"></script>

<!--=== REVOLUTION JS ===-->
<script src="<?php echo e(asset('assets/front_new/js/revslider/rev-active.js')); ?>"></script>

   
    <?php echo $__env->yieldContent('script'); ?>



<?php if($visibility->is_tawk_to	== 1): ?>
<?php echo $commonsetting->tawk_to; ?>

<?php endif; ?>


<?php if($visibility->is_messenger	== 1): ?>
<?php echo $commonsetting->messenger; ?>

<?php endif; ?>


<?php if(session()->has('success')): ?>
    <script>
        $(function() {
            // Form Submit Success Message alert
            $message = '<?php echo e(session('success')); ?>';

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
<?php endif; ?>

<?php if(session()->has('warning')): ?>
    <script>
        $(function() {
            // Form Submit Success Message alert
            $message = '<?php echo e(session('warning')); ?>';

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
<?php endif; ?>

<?php if(session()->has('error')): ?>
    <script>
        $(function() {
            // Form Submit Success Message alert
            $message = '<?php echo e(session('error')); ?>';

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
<?php endif; ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\harminder\multipurpose_website_cms\core\resources\views/front/layout2.blade.php ENDPATH**/ ?>