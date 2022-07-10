


<footer class="footer-area sp-y">
   

    <div class="footer-widget-area sm-top-wt">
        <div class="container">
            <div class="row mtn-40">
                <div class="col-lg-4 order-4 order-lg-0">
                    <div class="widget-item">
                        <div class="about-widget">
                            <a href="<?php echo e(route('front.index')); ?>"><img src="<?php echo e(asset('assets/front/img/'.$setting->footer_logo )); ?>" alt="Logo"/></a>
                            <p><?php echo e($setting->footer_text); ?></p>

                            <div class="copyright-txt">
                                <p>
                                    <?php echo $setting->copyright_text; ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-2 mx-auto">
                    <div class="widget-item">
                        <h4 class="widget-title"><?php echo e(__('Links')); ?></h4>
                        <div class="widget-body">
                            <ul class="widget-list">
                               <?php $__currentLoopData = $flinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e($item->url); ?>"><i class="fal fa-angle-right"></i><?php echo e($item->name); ?></a></li> 
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>

                

                <div class="col-md-4 col-lg-3">
                    <div class="widget-item">
                        <h4 class="widget-title">Contact</h4>
                        <div class="widget-body">
                              
                            <address>
                              
                               <?php
                                $femail = explode( ',', $commonsetting->email );
                                for ($i=0; $i < count($femail); $i++) { 
                                    echo '<a class="d-block" href="mailto:'.$femail[$i].'"><i class="far fa-envelope"></i> '.$femail[$i].'</a>';
                                }
                            ?> 
                                 <?php
                                    $fnumber = explode( ',', $commonsetting->number );
                                    for ($i=0; $i < count($fnumber); $i++) { 
                                        echo '<a class="d-block" href="tel:'.$fnumber[$i].'"><i class="fas fa-headset"></i> '.$fnumber[$i].'</a>';
                                    }
                                ?>
                                
                                <?php echo e($setting->opening_hours); ?>

                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--== End Footer Area Wrapper ==-->

<!-- Scroll Top Button -->
<button class="btn-scroll-top"><i class="mdi mdi-chevron-up"></i></button>


<!-- Start Off Canvas Menu Wrapper -->
<aside class="off-canvas-wrapper off-canvas-cog">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner">
        <div class="close-btn">
            <button class="btn-close"><i class="mdi mdi-close"></i></button>
        </div>

        <!-- Start Off Canvas Content -->
        <div class="off-canvas-content mb-sm-30">
            <div class="off-canvas-item">
                <div class="log-in-content-wrap">
                    <h2>Login</h2>
                    <div class="login-form mtn-15">
                        <form action="#" method="post">
                            <div class="form-input-item">
                                <label for="username" class="sr-only">Username</label>
                                <input type="text" id="username" placeholder="Username" required>
                            </div>

                            <div class="form-input-item">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" id="password" placeholder="Password" required>
                            </div>

                            <div class="form-input-item">
                                <button type="submit" class="btn-submit">Login</button>
                            </div>
                        </form>
                    </div>

                    <div class="sign-up-notification">
                        <p>Not Resisted? <a href="#">Create Account Now.</a></p>
                    </div>
                </div>
            </div>

            <div class="off-canvas-item mt-sm-30">
                <div class="social-icons">
                    <a href="https://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a>
                    <a href="https://pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a>
                </div>
                <div class="copyright-content">
                    <p>&copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        Businex Ltd. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- End Off Canvas Menu Wrapper -->


<!-- Start Off Canvas Menu Wrapper -->
<aside class="off-canvas-wrapper off-canvas-menu">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner">
        <!-- Start Off Canvas Header -->
        <div class="close-btn">
            <button class="btn-close"><i class="mdi mdi-close"></i></button>
        </div>

        <!-- Start Off Canvas Content -->
        <div class="off-canvas-content">
            <div class="res-mobile-menu">

            </div>
        </div>
    </div>
</aside>
<!-- End Off Canvas Menu Wrapper -->

<?php /**PATH C:\xampp\htdocs\harminder\multipurpose_website_cms\core\resources\views/front/partials/footer.blade.php ENDPATH**/ ?>