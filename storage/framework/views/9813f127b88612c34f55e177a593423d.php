

<?php $__env->startSection('head'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('head'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo e(url('css/account.css')); ?>">
    <script src="<?php echo e(url('js/account.js')); ?>" defer></script>
    <script>const DELETE = "<?php echo e(url('deleteMovie')); ?>";
            const MOVIES = "<?php echo e(url('movies')); ?>";
    </script>
    <title>Stream-Zone :il tuo account</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<header>
    <h2>La tua Watchlist:</h2>
<section class="box">

<div id="contents">
</div>
</section>
</header>
<footer>
    <span>DENNIS BORDONARO N° 1000001850</span>
    <div class="footer_container">
    <p>Chi siamo</p>
    <p>Link utili</p>
    <p>Valuta la tua esperienza</p>
    <p>Gli show del momento</p>
    </div>
    <span id="site_name"> ™ Stream-Zone: 2023 All right reserved</span>
</footer>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HW2\resources\views/account.blade.php ENDPATH**/ ?>