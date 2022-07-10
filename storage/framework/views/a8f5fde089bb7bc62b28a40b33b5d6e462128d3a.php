
<?php $__env->startSection('meta-keywords', "$seo->about_meta_key"); ?>
<?php $__env->startSection('meta-description', "$seo->about_meta_desc"); ?>
<?php $__env->startSection('content'); ?>

 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-header-area bg-img" data-bg="<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>" style="background-image: url('<?php echo e(asset('assets/front/img/'.$setting->breadcrumb_image)); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <h2><?php echo e(__('About')); ?></h2>
                        
                        <div class="breadcrumb-wrap">
                            <ul class="breadcrumb">
                                <li class=""><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?> </a></li>
              <li class=""><?php echo e(__('About')); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PAGE TITLE PART ENDS ======-->

<?php if($visibility->is_about_about == 1): ?>
<div class="about-area-wrapper sm-top">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-md-6 col-lg-5">
                <figure class="about-thumb">
                    <img src="<?php echo e(asset('assets/front/img/'.$sinfo->about_image)); ?>" alt="Businex-About"/>
                </figure>
            </div>

            <div class="col-md-6 col-lg-7">
                <div class="about-content">
                    <h6><?php echo e($sinfo->about_sub_title); ?></h6>
                    <h2><?php echo e($sinfo->about_title); ?></h2>
                    <span class="about-since"><?php echo e($sinfo->about_experince_yers); ?> <?php echo e(__('Years Of Experience')); ?></span>
                    <p><strong>Businex</strong> always try to provide the best Business Solutions for <?php echo (strlen(strip_tags(Helper::convertUtf8($sinfo->about_text))) > 280) ? substr(strip_tags(Helper::convertUtf8($sinfo->about_text)), 0, 280) . '...' : strip_tags(Helper::convertUtf8($sinfo->about_text)); ?></p>
                    <a class="btn-about" href="<?php echo e(route('front.about')); ?>"><?php echo e(__('Learn More')); ?><i class="mdi mdi-chevron-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php if($visibility->is_about_about == 1): ?>



<div class="feature-area-wrapper sm-top">
    <div class="container">
        <div class="row mtn-sm-40 mtn-md-5">
        				<?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3">
                <div class="icon-box-item">
                    <div class="icon-box__icon">
                        <i class="<?php echo e($item->icon); ?>" style="font-size: 45px;"></i>
                    </div>
                    <div class="icon-box__info">
                        <h5><?php echo e($item->title); ?></h5>
                        <p><?php echo e($item->text); ?> </p>
                    </div>
                </div>
            </div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
        </div>
    </div>
</div>
<?php endif; ?>

<!--== Start Testimonial Area Wrapper ==-->
    <?php if($visibility->is_t5_testimonial_section == 1): ?>
<div class="testimonial-area bg-offwhite sp-y sm-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-title mb-0">
                    <h6><?php echo e($sinfo->testimonial_subtitle); ?></h6>
                    <h2><?php echo e($sinfo->testimonial_title); ?></h2>
                   
                </div>

                <div class="testimonial-carousel-dots"></div>
            </div>

            <div class="col-lg-6 ms-auto">
                <div class="testimonial-content-wrap">
                    <div class="testimonial-content">
                        <!-- Start Testimonial Item -->
                                                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="testimonial-item">
                            <div class="testimonial-thumb">
                                <img src="<?php echo e(asset('assets/front/img/'.$item->image)); ?>" alt="Businex"/>
                            </div>

                            <div class="testimonial-txt">
                                <img src="<?php echo e(asset('assets/front_new/img/icons/quote.png')); ?>" alt="Businex"/>
                                <p> <?php echo e($item->message); ?>.</p>
                                <h5 class="client-name"><?php echo e($item->name); ?></h5>
                            </div>
                        </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <!-- End Testimonial Item -->

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>

<?php if($visibility->is_about_history == 1): ?>
<div class="about-history-area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-8">
				<div class="section-title text-center">
					<h2 class="title"><?php echo e($sinfo->our_history_title); ?></h2>
					<p><?php echo e($sinfo->our_history_text); ?></p>
				</div> <!-- section title -->
			</div>
		</div> <!-- row -->
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<?php $__currentLoopData = $histories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($loop->iteration % 2 == 0): ?>
					<div class="row justify-content-start">
						<div class="col-md-6">
							<div class="history-item">
								<div class="history-thumb wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".1s">
									<img src="<?php echo e(asset('assets/front/img/history/'.$item->image)); ?>" alt="history">
								</div>
								<div class="history-content wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".1s">
									<span><?php echo e($item->date); ?> - <?php echo e($item->position); ?></span>
									<h4 class="title"><?php echo e($item->title); ?></h4>
								</div>
								<div class="number-box">
									<span><?php echo e(++$id); ?></span>
								</div>
							</div> 
						</div>
					</div>
					<?php else: ?> 
					<div class="row justify-content-end">
						<div class="col-md-6">
							<div class="history-item history-item-2">
								<div class="history-thumb wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".1s">
									<img src="<?php echo e(asset('assets/front/img/history/'.$item->image)); ?>" alt="history">
								</div>
								<div class="history-content wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".1s">
									<span><?php echo e($item->date); ?> - <?php echo e($item->position); ?></span>
									<h4 class="title"><?php echo e($item->title); ?></h4>
								</div>
								<div class="number-box">
									<span><?php echo e(++$id); ?></span>
								</div>
							</div> 
						</div>
					</div>
					<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
			
		</div> <!-- row -->
	</div> <!-- container -->
</div> 
<?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\harminder\multipurpose_website_cms\core\resources\views/front/about.blade.php ENDPATH**/ ?>