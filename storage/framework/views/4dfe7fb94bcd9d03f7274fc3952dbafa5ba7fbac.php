
<?php $__env->startSection('meta-keywords', "$seo->contact_meta_key"); ?>
<?php $__env->startSection('meta-description', "$seo->contact_meta_desc"); ?>

<?php $__env->startSection('content'); ?>

<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img" data-bg="<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>" style="background-image: url('<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <h2><?php echo e(__('Contact')); ?></h2>
                        
                        <div class="breadcrumb-wrap">
                            <ul class="breadcrumb">
                                <li class=""><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
              <li class=""><?php echo e(__('Contact')); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <!--====== PAGE TITLE PART START ======-->
 
<!--== Start Contact Page Area Wrapper ==-->
<div class="contact-page-area-wrapper sp-y">
    <div class="container">
        <div class="contact-content-wrap">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form-area contact-method">
                        <h3><?php echo e($sinfo->contact_title); ?></h3>

                        <div class="contact-form-wrap">
                            <form action="<?php echo e(route('front.contact.submit')); ?>" method="post"
                                  id="contact-form">
                                  <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label>
                                                <input type="text" name="name" placeholder="Full Name *"
                                                       required/>
                                            </label>
                                        </div>
                                        <?php if($errors->has('name')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('name')); ?> </p>
                                    <?php endif; ?>
                                    </div>

                                  

                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label>
                                                <input type="email" name="email" placeholder="Email address *"
                                                       required/>
                                            </label>
                                        </div>
                                        <?php if($errors->has('email')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('email')); ?> </p>
                                    <?php endif; ?>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label>
                                                <input type="text" name="phone" placeholder="Your Phone"/>
                                            </label>
                                        </div>
                                        <?php if($errors->has('Phone')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('Phone')); ?> </p>
                                    <?php endif; ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label>
                                                <input type="text" name="subject" placeholder="Your Phone"/>
                                            </label>
                                        </div>
                                        <?php if($errors->has('subject')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('subject')); ?> </p>
                                    <?php endif; ?>
                                    </div>

                                    <div class="col-12">
                                        <div class="single-input-item">
                                            <label for="con_message" class="sr-only m-0"></label>
                                            <textarea name="message" id="con_message" cols="30" rows="7"
                                                      placeholder="Message *" required></textarea>
                                        </div>
                                        <?php if($errors->has('message')): ?>
                                        <p class="text-danger"> <?php echo e($errors->first('message')); ?> </p>
                                    <?php endif; ?>
                                        <div class="col-md-6">
                                            <?php if($visibility->is_recaptcha == 1): ?>
                                                <div class="mt-3 d-inline-block ml-4" >
                                                    <?php echo NoCaptcha::renderJs(); ?>

                                                    <?php echo NoCaptcha::display(); ?>

                                                    <?php if($errors->has('g-recaptcha-response')): ?>
                                                    <?php
                                                        $errmsg = $errors->first('g-recaptcha-response');
                                                    ?>
                                                    <p class="text-danger mb-0"><?php echo e(__("$errmsg")); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="single-input-item mb-0 mt-40">
                                            <button class="btn-outline">Send Message</button>
                                        </div>

                                        <div class="form-message"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-information contact-method">
                        <div class="contact-info-con">
                            <h3>Contact Info</h3>

                            <div class="widget-item m-0">
                                <address>
                                    <?php echo e($setting->address); ?>

                                    <br>
                                    <?php echo e($setting->opening_hours); ?>

                                    <br>
                                    <?php
                                $femail = explode( ',', $setting->email );
                                for ($i=0; $i < count($femail); $i++) { 
                                    echo '<p>'.$femail[$i].'</p>';
                                }
                            ?>
                                    <br>
                                    <?php
                                    $fnumber = explode( ',', $setting->number );
                                    for ($i=0; $i < count($fnumber); $i++) { 
                                        echo '<p>'.$fnumber[$i].'</p>';
                                    }
                                ?>
                                </address>
                            </div>
                            <div class="member-social-icons mt-30">
                                <a href="#"><i class="mdi mdi-facebook"></i></a>
                                <a href="#"><i class="mdi mdi-twitter"></i></a>
                                <a href="#"><i class="mdi mdi-linkedin"></i></a>
                                <a href="#"><i class="mdi mdi-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Contact Page Area Wrapper ==-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\harminder\multipurpose_website_cms\core\resources\views/front/contact.blade.php ENDPATH**/ ?>