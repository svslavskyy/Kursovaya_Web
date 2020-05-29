<?php $__env->startSection('filter_check'); ?>
    <?php if(isset($filter)): ?>
        <div class="filter_box_name">
            <?php $__currentLoopData = $filter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $types): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="right_filter_boxing">
                        <p><?php echo e($item->name ?? $item); ?></p>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('filter_left'); ?>
    <form action="/searching">
        <div class="left_content">
            <div class="left_class">
                <form>
                    <div class="left_items_type">
                        <p>Куди</p>
                        <button class="type_on"></button>
                        <button class="type_off"></button>
                    </div>
                    <div>
                        <label class="left_item">
                            <input class="checkbox" type="checkbox" name="country[]" value="Єгипет">
                            <span class="fake-checkbox"></span> Єгипет
                        </label>
                        <label class="left_item">
                            <input class="checkbox" type="checkbox" name="country[]" value="Іспанія">
                            <span class="fake-checkbox"></span> Іспанія
                        </label>
                        <label class="left_item">
                            <input class="checkbox" type="checkbox" name="country[]" value="Греція">
                            <span class="fake-checkbox"></span> Греція
                        </label>
                        <label class="left_item">
                            <input class="checkbox" type="checkbox"  name="country[]" value="Італія">
                            <span class="fake-checkbox"></span> Італія
                        </label>
                        <label class="left_item">
                            <input class="checkbox" type="checkbox"  name="country[]" value="Україна">
                            <span class="fake-checkbox"></span> Україна
                        </label>
                    </div>
                </form>
            </div>
            <div class="left_class">
                <div class="left_items_type">
                    <p>Місто відправлення</p>
                    <button class="type_on"></button>
                    <button class="type_off"></button>
                </div>
                <label class="left_item">
                    <input class="checkbox" type="checkbox" name="city[]" value="Київ">
                    <span class="fake-checkbox"></span> Київ
                </label>
                <label class="left_item">
                    <input class="checkbox" type="checkbox" name="city[]" value="Львів">
                    <span class="fake-checkbox"></span> Львів
                </label>
                <label class="left_item">
                    <input class="checkbox" type="checkbox" name="city[]" value="Одеса">
                    <span class="fake-checkbox"></span> Одеса
                </label>
                <label class="left_item" >
                    <input class="checkbox" type="checkbox" name="city[]" value="Дніпро">
                    <span class="fake-checkbox"></span> Дніпро
                </label>
                <label class="left_item" >
                    <input class="checkbox" type="checkbox" name="city[]" value="Харків">
                    <span class="fake-checkbox"></span> Харків
                </label>
            </div>
            <div class="left_class">

                <div class="left_items_type">
                    <p>Тривалість</p>
                    <button class="type_on"></button>
                    <button class="type_off"></button>
                </div>
                <label class="left_item">
                    <input class="checkbox" type="checkbox" name="duration[]" value="3">
                    <span class="fake-checkbox"></span> 3 дні
                </label>
                <label class="left_item">
                    <input class="checkbox" type="checkbox" name="duration[]" value="7">
                    <span class="fake-checkbox"></span> 7 днів
                </label>
                <label class="left_item" >
                    <input class="checkbox" type="checkbox" name="duration[]" value="9">
                    <span class="fake-checkbox"></span> 9 днів
                </label>
                <label class="left_item" >
                    <input class="checkbox" type="checkbox" name="duration[]" value="14">
                    <span class="fake-checkbox"></span> 14 днів
                </label>
            </div>
            <div class="left_class">
                <div class="left_items_type">
                    <p>Вартість</p>
                    <button class="type_on"></button>
                    <button class="type_off"></button>
                </div>
                <label class="left_item">
                    <input class="checkbox" type="radio" name="price[]" value="<10000">
                    <span class="fake-checkbox"></span> до 10000 грн
                </label>
                <label class="left_item">
                    <input class="checkbox" type="radio" name="price[]" value="<15000">
                    <span class="fake-checkbox"></span> до 15000 грн
                </label>
                <label class="left_item" >
                    <input class="checkbox" type="radio" name="price[]" value="<=30000">
                    <span class="fake-checkbox"></span> до 30000 грн
                </label>
                <label class="left_item" >
                    <input class="checkbox" type="radio" name="price[]" value=">30000">
                    <span class="fake-checkbox"></span> понад 30000 грн
                </label>
            </div>
            <button type="submit">Застосувати</button>
            <a href="/searching">Видалити</a>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('tour_content'); ?>
    <?php if(count($tours) != 0): ?>
        <div class="tour">
            <div class="tour_block_items">
                <?php $__currentLoopData = $tours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($loop->index % 4 == 0 && $loop->index != 0): ?>
                            </div>
                        </div>
                        <div class="question">
                            <div>
                                <p class="question_text_1">
                                    Не змогли обрати найкращій тур?
                                </p>
                                <p class="question_text_2">
                                    Залиште повідомлення і ми знайдемо для Вас райський відпочинок
                                </p>
                            </div>
                            <div>
                                <form class="question_call" action="/searching" method="post">
                                    <?php echo csrf_field(); ?>
                                    <input type="text" name="name" placeholder="Ваше ім'я..">
                                    <input type="text" name="phone" placeholder="Телефон..">
                                    <button type="submit">Відправити</button>
                                </form>
                            </div>
                        </div>
                        <div class="tour">
                            <div class="tour_block_items">
                    <?php elseif($loop->index % 2 == 0 && $loop->index != 0): ?>
                            </div>
                        </div>
                        <div class="tour">
                            <div class="tour_block_items">
                    <?php endif; ?>
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
                                <?php echo e($tour->countries->name); ?>, <?php echo e($tour->cities->name); ?>

                            </p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php else: ?>
        <div class="tour">
            <div class="tour_block_items">
                <div id="sorry">
                    <img src="../img/sad.png">
                    <p>
                        На жаль, тури, що відповідають обраним критеріям, відсутні.
                    </p>
                </div>
            </div>
        </div>
        <div class="question">
            <div>
                <p class="question_text_1">
                    Не змогли обрати найкращій тур?
                </p>
                <p class="question_text_2">
                    Залиште повідомлення і ми знайдемо для Вас райський відпочинок
                </p>
            </div>
            <div>
                <form class="question_call" action="/searching" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="text" name="name" placeholder="Ваше ім'я..">
                    <input type="text" name="phone" placeholder="Телефон..">
                    <button type="submit">Відправити</button>
                </form>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('html_searching', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bdubr\travel\resources\views/searching.blade.php ENDPATH**/ ?>