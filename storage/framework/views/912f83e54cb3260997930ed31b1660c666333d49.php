
<header class="header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-5 col-lg-2">
                <!-- Start Logo Area -->
                <div class="logo-area">
                    <a href="<?php echo e(route('front.index')); ?>"><img src="<?php echo e(asset('assets/front/img/'.$setting->header_logo )); ?>" alt="Businex-Logo"></a>
                </div>
                <!-- End Logo Area -->
            </div>
  <div class="col-lg-7 d-none d-lg-block">
                <!-- Start Navigation Area -->
                <div class="navigation-area mt-lg-3">
                <?php echo $__env->make('front.partials.menu.nav-item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
                <!-- End Navigation Area -->
            </div>

            <div class="col-7 col-lg-3">
                <!-- Start Header Action Area -->
                <div class="header-action mt-lg-3 text-end">
                    <a href="tel:00199823568658" class="tel-no">+998 23568 658</a>
                    <button class="btn-cog"><i class="fa fa-cog"></i></button>
                    <button class="btn-menu d-lg-none"><i class="fa fa-bars"></i></button>
                </div>
                <!-- End Header Action Area -->
            </div>
        </div>
    </div>
</header>
        
<?php /**PATH C:\xampp\htdocs\harminder\multipurpose_website_cms\core\resources\views/front/partials/menu/menu1.blade.php ENDPATH**/ ?>