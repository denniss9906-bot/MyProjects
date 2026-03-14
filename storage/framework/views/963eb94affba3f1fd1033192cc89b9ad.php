

<?php $__env->startSection('head'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('head'); ?>
    <title>Stream-Zone</title>
    <link rel="stylesheet" href="<?php echo e(url('css/upcoming.css')); ?>">
    <script src="<?php echo e(url('js/upcoming.js')); ?>" defer></script>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
<header>
<h1>Hey <?php echo e($username); ?> ! Dai un'occhiata ai film più recenti e in  uscita nei prossimi mesi</h1>
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HW2\resources\views/upcoming.blade.php ENDPATH**/ ?>