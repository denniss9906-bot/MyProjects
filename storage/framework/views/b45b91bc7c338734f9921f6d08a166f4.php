

<?php $__env->startSection('head'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('head'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Stream-Zone</title>
    <link rel="stylesheet" href='<?php echo e(url("css/home.css")); ?>'>
    <script src='<?php echo e(url("js/home.js")); ?>' defer></script>
     <script> const SEARCH = '<?php echo e(url("searchMovie")); ?>'; 
              const ADD = '<?php echo e(url("addWatchlist")); ?>';
              const CSRF_TOKEN = '<?php echo e(csrf_token()); ?>';
              
    </script>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<header>
<h2>Benvenuto su Stream-Zone!</h2>
<p>Inizia subito a cercare i tuoi film e show preferiti dalla barra di ricerca</p>
<section>
    <form id="src">
        <div id="searchBar">
        <label for="search">Cerca</label>
        <input type="text" name="search" id="src_bar" placeholder="Inserisci un titolo">
        <input type="submit" value="CERCA">
        </div>
    </form>
</section>
</header>
</section>
<section class="box">
<div id="contents">
</div>
</section>
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
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HW2\resources\views/home.blade.php ENDPATH**/ ?>