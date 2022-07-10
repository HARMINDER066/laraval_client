

<?php $__env->startSection('meta-keywords', "$seo->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$seo->meta_description"); ?>
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
                                <li class=""><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
              <li class=""><a href="<?php echo e(route('front.service')); ?>"><?php echo e(__('Service')); ?> </a></li>
              <li class="active" aria-current="page"><?php echo e($service->title); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PAGE TITLE PART ENDS ======-->

<!--====== Service details  Start ======-->

<div class="page-content-wrapper">
    <div class="service-details-wrapper sm-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-details-content">
                        <figure class="service-details-thumb">
                            <img src="<?php echo e(asset('assets/front/img/service/'.$service->image)); ?>" alt="Businex-Service Details"/>
                        </figure>
                        <div class="service-details-info">
                            <h3>Digital Solutions</h3>
                            <p>Voluptatum delenitied atqued corrupti is eseted quased stias cepturi sint aete non
                                provident,
                                similique sunt dunt labore ete dolored magnam aliquam quaerat Neque porro quisquam
                                est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                                numquam
                                eius modi tempora incidun</p>

                            <div class="about-service mt-50 mt-sm-35">
                                <h4>About this Service</h4>
                                <?php echo $service->content; ?>

                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-4 mtn-40">
                    <div class="sidebar-wrap mt-sm-90 mt-md-100">
                        <!-- Start Sidebar Item -->
                        <div class="sidebar-single">
                            <h3 class="sidebar-heading"><?php echo e(__('All Services')); ?></h3>
                            <div class="sidebar-body">
                                <ul class="service-list">
                <?php $__currentLoopData = $all_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><a href="<?php echo e(route('front.service.details', $item->slug)); ?>" class="<?php if($service->id == $item->id ): ?> active  <?php endif; ?>"><?php echo e($item->title); ?></a></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <!-- End Sidebar Item -->

                        <!-- Start Sidebar Item -->
                        <div class="sidebar-single">
                            <h3 class="sidebar-heading"><?php echo e(__('Never Miss News')); ?></h3>
                            <div class="sidebar-body">
                              <div class="member-social-icons mt-25">
                                 <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($item->url); ?>" class="pinterest"><i class="<?php echo e($item->icon); ?>"></i></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div> 
                            </div>
                        </div>
                        <!-- End Sidebar Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        
<!--====== Service details  End ======-->
<div class="related-service-area sm-top-wt">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto text-center">
                <div class="section-title">
                    <h6>More Services</h6>
                    <h2>Related Services</h2>
                </div>
            </div>
        </div>

        <div class="row mtn-30">

            <?php $__currentLoopData = $related_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<!--== End Related Service Area ==-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\harminder\multipurpose_website_cms\core\resources\views/front/service-details.blade.php ENDPATH**/ ?>