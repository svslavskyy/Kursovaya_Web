<?php $__env->startSection('news_content'); ?>
    <div class="tour_block_items">
        <?php $__currentLoopData = $newses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="tour_item">
                <img src="../img/<?php echo e($news->photo); ?>"/>
                <div class="item_info">
                    <p class="item_info_p_1">
                        <?php echo e($news->article); ?>

                        <br>
                    </p>
                    <p class="item_info_p_2">
                        <br>
                        <?php echo e($news->text); ?>

                    </p>
                    <a href="<?php echo e($news->link); ?>">
                        Читати далі
                    </a>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('hot_content'); ?>
    <div class="tour_block_items">
        <?php $__currentLoopData = $hot_tours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="tour_item">
                <div class="item_image">
                    <img src="../img/<?php echo e($hot->photo); ?>"/>
                    <div class="item_image_text">
                        <div>
                            <p class="item_p_1">
                                <?php echo e($hot->price); ?> грн
                            </p>
                            <p class="item_p_2">
                                за 1 особу
                            </p>
                        </div>
                        <a href="/tour/<?php echo e($hot->id); ?>">Детальніше</a>
                    </div>
                </div>
                <div class="item_info">
                    <p class="item_info_p_1">
                        <?php echo e($hot->hotel_name); ?>

                    </p>
                    <p class="item_info_p_2">
                        <?php echo e($hot->countries->name); ?> , <?php echo e($hot->cities->name); ?>

                    </p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('popular_content'); ?>
    <div class="tour_block_items">
        <?php $__currentLoopData = $popular_tours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="tour_item">
                <div class="item_image">
                    <img src="../img/<?php echo e($tour->photo); ?>"/>
                    <div class="item_image_text">
                        <div>
                            <p class="item_p_1">
                                <?php echo e($tour->price); ?> грн
                            </p>
                            <p class="item_p_2">
                                за 1 особу
                            </p>
                        </div>
                        <a href="/tour/<?php echo e($tour->id); ?>">Детальніше</a>
                    </div>
                </div>
                <div class="item_info">
                    <p class="item_info_p_1">
                        <?php echo e($tour->hotel_name); ?>

                    </p>
                    <p class="item_info_p_2">
                        <?php echo e($tour->countries->name); ?> , <?php echo e($tour->cities->name); ?>

                    </p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('html_landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bdubr\travel\resources\views/landing.blade.php ENDPATH**/ ?>