
<?php $__env->startSection('meta-keywords', "$seo->service_meta_key"); ?>
<?php $__env->startSection('meta-description', "$seo->service_meta_desc"); ?>
<?php $__env->startSection('content'); ?>

 <!--====== PAGE TITLE PART START ======-->
         
 


<div class="page-header-area bg-img" data-bg="<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>" style="background-image: url('<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <h2><?php echo e(__('Service')); ?></h2>
                        
                        <div class="breadcrumb-wrap">
                            <ul class="breadcrumb">
                                <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a></li>
                                <li><a href="#"><?php echo e(__('Service')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PAGE TITLE PART ENDS ======-->
    
<!-- Service Area Start -->
<div class="related-service-area sm-top-wt">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto text-center">
                <div class="section-title">
                    <h6>Our Services</h6>
                    <h2>Related Services</h2>
                </div>
            </div>
        </div>

        <div class="row mtn-30">

            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6 col-lg-4">
                    <!-- Start Service Item -->
                    <div class="service-item">
                        <figure class="service-thumb">
                            <a href="<?php echo e(route('front.service.details', $item->slug)); ?>"><img src="<?php echo e(asset('assets/front/img/service/'.$item->image)); ?>" alt="Businex-Service"/></a>

                            <figcaption class="service-txt">
                                <h5><?php echo e($item->title); ?></h5>
                            </figcaption>
                        </figure>
                        <div class="service-content">
                            <div class="service-content-inner">
                                <h5><a href="<?php echo e(route('front.service.details', $item->slug)); ?>" class="stretched-link"></a><?php echo e($item->title); ?></h5>
                                <p><?php echo e((strlen(strip_tags(Helper::convertUtf8($item->content))) > 140) ? substr(strip_tags(Helper::convertUtf8($item->content)), 0, 140) . '...' : strip_tags(Helper::convertUtf8($item->content))); ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->
                </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

           

           
        </div>
    </div>
</div>
<!-- Service Area End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\harminder\multipurpose_website_cms\core\resources\views/front/service.blade.php ENDPATH**/ ?>