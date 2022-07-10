
<?php
$links = json_decode($menus, true);
//  dd($links);

?>

                    <ul class="main-menu nav">

        <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $href = Helper::getHref($link);
            ?>


                <?php if(!array_key_exists("children",$link)): ?>
                    <li class="<?php if($href == URL::current() ): ?> current  <?php endif; ?>">
                        <a class="" href="<?php echo e($link["href"] == null ? $href : $link["href"]); ?>" target="<?php echo e($link["target"]); ?>"><?php echo e($link["text"]); ?></a>
                    </li>
                <?php else: ?>
                <li class="has-submenu <?php if($href == URL::current() ): ?> current  <?php endif; ?>">
                    <a class="" href="<?php echo e($href); ?>"  target="<?php echo e($link["target"]); ?>"><?php echo e($link["text"]); ?></a>
                    <ul class="submenu-nav">
                        <?php $__currentLoopData = $link["children"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $l2Href = Helper::getHref($level2); 
                        ?>
                            <li>
                                <a href="<?php echo e($l2Href); ?>"  target="<?php echo e($level2["target"]); ?>"><?php echo e($level2["text"]); ?></a>
                                    <?php
                                    
                                            if (array_key_exists("children", $level2)) {
                                                Helper::createMenu($level2);
                                            }
                                            
                                    ?>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
                <?php endif; ?>


        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

       
           
    </ul>

<?php /**PATH C:\xampp\htdocs\harminder\multipurpose_website_cms\core\resources\views/front/partials/menu/nav-item.blade.php ENDPATH**/ ?>