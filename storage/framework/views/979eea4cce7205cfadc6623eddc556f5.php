<html>
    <head>
        <?php $__env->startSection('head'); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php echo $__env->yieldSection(); ?>
    </head>

<body>
<div id="click_area" class="hidden"></div>
<section id="header_container">
<nav>
<div class="links">
<img id="logo" src="play.logo.jpg">
<a id="title">STREAMZONE</a>
<a href='<?php echo e(url("home")); ?>'>HOME</a>
<a>ABOUT</a>
<a>SHARE</a>
<a>CONTACTS</a>
<a id ='upcoming' href='<?php echo e(url("upcoming")); ?>'>COMING SOON</a>
<a href='<?php echo e(url("account")); ?>'>IL TUO PROFILO</a>
<a href='<?php echo e(url("logout")); ?>' id="esc">ESCI</a>
</div>
<div id="menu">
    <div></div>
    <div></div>
    <div></div>
</div>
</nav>
        <?php $__env->startSection('content'); ?>
        <?php echo $__env->yieldSection(); ?>
</body>
<?php /**PATH C:\xampp\htdocs\HW2\resources\views/layout.blade.php ENDPATH**/ ?>