<!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?php echo $__env->yieldContent('library'); ?>" rel="stylesheet" type="text/css" >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YourTravel</title>
    <script>
        function viewDiv(){
            document.getElementById("left_small").style.display = "block";
            document.getElementById("left_small").style.width = "100%";
        }
    </script>

</head>
<body>
<div class="head">
    <div class="logo">
        <a href="/landing"><img  id="btn_logo" src="../img/travel_logo.png"></a>
    </div>
    <div class="head_text">
        <a href="/landing">Головна</a>
        <a href="/searching">Пошук турів</a>
        <a href="/about">Про нас</a>
        <button id="btn_search"></button>
        <button id="btn_menu"></button>
    </div>
</div>

    <?php echo $__env->yieldContent('content'); ?>

    <div class="foot">
        <div class="foot_1">
            <a href="/landing">Головна</a>
            <a href="/searching">Пошук турів</a>
            <a href="/about">Про нас</a>
        </div>
        <div class="foot_2">
            <a>т.+38(066)-450-61-23</a>
            <button id="button_t"></button>
            <button id="button_e"></button>
            <button id="button_i"></button>
        </div>
    </div>
    <div class="foot_small">
        <div class="foot_1">
            <div>
                <a href="/landing">Головна</a>
                <a href="/searching">Пошук турів</a>
                <a href="/about">Про нас</a>
            </div>
            <div>
                <button id="button_t_s"></button>
                <button id="button_e_s"></button>
                <button id="button_i_s"></button>
            </div>
        </div>
        <div class="foot_2">
            <a>т.+38(066)-450-61-23</a>
        </div>
    </div>
</body>
</html>

<?php /**PATH C:\Users\bdubr\travel\resources\views/main.blade.php ENDPATH**/ ?>