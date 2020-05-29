]
<?php $__env->startSection('fitch'); ?>
    <div class="fitch">
        <?php $__currentLoopData = $tours->first()->options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="fitch_text">
                <p><?php echo e($option->name); ?></p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('hotel'); ?>
    <div class="name_hotel">
        <h4><?php echo e($tours->first()->hotel_name); ?></h4>
    </div>
    <div class="stars">
        <?php for($i = 0; $i < $tours->first()->stars; $i++): ?>
            <img src="../img/shapes-and-symbols.svg">
        <?php endfor; ?>
        <p><?php echo e($tours->first()->countries->name); ?>, <?php echo e($tours->first()->cities->name); ?></p>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>

    <div class="description">
        <h4 class="description_h4">Опис</h4>
        <p><?php echo e($tours->first()->description); ?></p>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('question'); ?>
    <div class="search_h4"> <h4>Тури в готель <?php echo e($tours->first()->hotel_name); ?></h4></div>
    <div class="search">
        <div class="question">
            <div>
                <p class="question_text_2">
                    Оберемо оптимальний варіант, саме для Вас
                </p>
            </div>
            <div>
                <form class="question_call" action="/tour" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="text" name="name" placeholder="Ваше ім'я..">
                    <input type="text" name="phone" placeholder="Телефон..">
                    <input type="text" name="email" placeholder="Email..">
                    <input type="text" name="tour_id" style="display: none" value="<?php echo e($tours->first()->id); ?>">
                    <button type="submit">Забронювати</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('html_tour', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bdubr\travel\resources\views/tour.blade.php ENDPATH**/ ?>