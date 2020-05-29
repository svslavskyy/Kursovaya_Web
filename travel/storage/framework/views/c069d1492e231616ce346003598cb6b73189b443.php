<?php $__env->startSection('library'); ?>
    <?php if(isset($pages->page)): ?>
        <?php echo e("../css/$pages->page.css"); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if(isset($pages->page)): ?>
        <?php echo $__env->make($pages->page, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bdubr\travel\resources\views/index.blade.php ENDPATH**/ ?>