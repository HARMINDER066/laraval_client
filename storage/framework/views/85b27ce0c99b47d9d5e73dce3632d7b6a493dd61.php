

<?php $__env->startSection('meta-keywords', "$seo->blog_meta_key"); ?>
<?php $__env->startSection('meta-description', "$seo->blog_meta_desc"); ?>
<?php $__env->startSection('content'); ?>

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
<div class="blog-page-content-area sp-y">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="blog-content-wrapper">
                    <div class="row mtn-30">
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
                            <div class="blog-item">
                                <figure class="blog-thumb">
                                    <a href="<?php echo e(route('front.blogdetails', $item->slug)); ?>"><img src="<?php echo e(asset('assets/front/img/blog/'.$item->image)); ?>" alt="Businex-Blog"></a>
                                </figure>
                                <div class="blog-content">
                                    <h2 class="h5"><a href="<?php echo e(route('front.blogdetails', $item->slug)); ?>"><?php echo e((strlen(strip_tags(Helper::convertUtf8($item->title))) > 40) ? substr(strip_tags(Helper::convertUtf8($item->title)), 0, 40) . '...' : strip_tags(Helper::convertUtf8($item->title))); ?></a></h2>
                                   

                                    <div class="blog-meta">
                                        <a href="#">By: Admin</a>
                                        <a href="#"><?php echo e(date ( 'd M, Y', strtotime($item->created_at) )); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>              
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <aside class="sidebar-area-wrapper mt-md-80 mt-sm-60">
                    <!-- Start Single Sidebar Wrap -->
                     <!-- Start Single Sidebar Wrap -->
                    <div class="single-sidebar-item-wrap">
                        <div class="sidebar-body">
                            <div class="sidebar-newsletter">
                                <h3><?php echo e(__('Search Blog')); ?></h3>
                               <form action="<?php echo e(route('front.blogs', ['category' => request()->input('category'), 'month' => request()->input('month'), 'year' => request()->input('year')])); ?>" method="GET">
                                <div class="input-box">
                                    <input name="category" type="hidden" value="<?php echo e(request()->input('category')); ?>">
                                    <input name="month" type="hidden" value="<?php echo e(request()->input('month')); ?>">
                                    <input name="year" type="hidden" value="<?php echo e(request()->input('year')); ?>">
                                    <input name="term" type="text" placeholder="<?php echo e(__('Search Blog')); ?>..." value="<?php echo e(request()->input('term')); ?>">
                                    <button class="btn btn-brand" type="submit"><i class="fal fa-search"></i></button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="single-sidebar-item-wrap">
                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-body">
                            <ul class="sidebar-list">
                                <?php $__currentLoopData = $bcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('front.blogs',  ['term'=>request()->input('term'), 'category'=>$bcategory->slug,  'month' => request()->input('month'), 'year' => request()->input('year')])); ?>"  class="<?php if(request()->input('category') == $bcategory->slug): ?> active <?php endif; ?>"><?php echo e($bcategory->name); ?><span><?php echo e($bcategory->blogs->count()); ?></span></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Sidebar Wrap -->

                    <!-- Start Single Sidebar Wrap -->
                    <div class="single-sidebar-item-wrap">
                        <h3 class="sidebar-title"><?php echo e(__('Latest News')); ?></h3>
                        <div class="sidebar-body">
                            <div class="latest-blog-widget">
                                <?php $__currentLoopData = $latestblogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestblog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="single-blog-item">
                                    <div class="post-thumb">
                                        <a href="<?php echo e(route('front.blogdetails', $latestblog->slug)); ?>"><img src="<?php echo e(asset('assets/front/img/blog/'.$latestblog->image)); ?>" alt="Thumb"></a>
                                    </div>
                                    <div class="post-info">
                                        <h6><a href="blog-details.html"><?php echo e((strlen(strip_tags(Helper::convertUtf8($latestblog->title))) > 50) ? substr(strip_tags(Helper::convertUtf8($latestblog->title)), 0, 50) . '...' : strip_tags(Helper::convertUtf8($latestblog->title))); ?></a></h6>
                                        <span class="post-date"><i class="fa fa-clock-o"></i>  <?php echo e(date ( 'd M, Y', strtotime($latestblog->created_at) )); ?></span>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>
                    </div>
                    <!-- End Single Sidebar Wrap -->

                   
                    <!-- End Single Sidebar Wrap -->

                    <!-- Start Single Sidebar Wrap -->
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
                    <!-- End Single Sidebar Wrap -->
                </aside>
            </div>
        </div>
    </div>
</div>

 <!--====== BLOG STANDARD PART End ======-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\harminder\multipurpose_website_cms\core\resources\views/front/blogs.blade.php ENDPATH**/ ?>