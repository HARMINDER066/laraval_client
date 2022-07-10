
<?php $__env->startSection('meta-keywords', "$blog->meta_keywords"); ?>
<?php $__env->startSection('meta-description', "$blog->meta_description"); ?>
<?php $__env->startSection('content'); ?>

 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-header-area bg-img" data-bg="<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>" style="background-image: url('<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <h2><?php echo e(__('Blogs')); ?></h2>
                        
                        <div class="breadcrumb-wrap">
                            <ul class="breadcrumb">
                                <li class=""><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
              <li class=""><?php echo e(__('Blogs')); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== PAGE TITLE PART ENDS ======-->

 <!--====== BLOG STANDARD PART START ======-->
         
 

<!--== Start Blog Details Page Content ==-->
<div class="blog-details-page-content sp-y">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <article class="blog-post-details">
                    <figure class="blog-post-thumb">
                        <img src="<?php echo e(asset('assets/front/img/blog/'.$blog->image)); ?>" style="width:100%" alt="Blog"/>
                    </figure>

                    <div class="blog-post-txt-wrap">
                        <div class="row">
                            <div class="col-md-3 col-lg-2 order-1 order-md-0">
                                <div class="author-info mt-sm-40">
                                    
                                    <div class="author-txt">
                                        <h5>By, Admin <span class="designation"><?php echo e(date ( 'd M, Y', strtotime($blog->created_at) )); ?></span></h5>

                                        
                                </div>
                            </div>
                        </div>

                            <div class="col-md-9 col-lg-8 m-auto order-0">
                                <div class="blog-post-txt">
                                    <h2 class="h3"><?php echo e($blog->title); ?></h2>

                                   <?php echo $blog->content; ?>


                                   
                                </div>


                            
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\harminder\multipurpose_website_cms\core\resources\views/front/blogdetails.blade.php ENDPATH**/ ?>