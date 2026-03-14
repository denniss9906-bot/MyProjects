<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(url('css/subscribe.css')); ?>">
    <script src='<?php echo e(url("js/subscribe.js")); ?>' defer></script>
    <script>const VERIFY_USER = '<?php echo e(url("verify_user")); ?>';</script>
    <script>const VERIFY_MAIL = '<?php echo e(url("verify_mail")); ?>';</script>
    <title>Iscriviti a StreamZone</title>
</head>
<body>
<div id="title">Iscriviti su STREAMZONE</div>
<section>
<h1>Compila il form per iscriverti gratuitamente a StreamZone</h1>
<form name='sub' method="POST" autocomplete="off" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<div id='name'>
<label for="name">Nome</label>
<input type="text" name="name" placeholder="Inserire nome">
<span></span>
</div>

<div id='user'>
<label for="username">Username</label>
<input type="text" name="username" placeholder="Inserire username" value='<?php echo e(old("username")); ?>'>
<span></span>
</div>

<div id='email'>
<label for="email">Indirizzo mail</label>
<input type="text" name="email" placeholder="Inserire indirizzo mail" value='<?php echo e(old("email")); ?>'>
<span></span>
</div>

<div id='password'>
<label for="password">Password</label>
<input type="text" name="password" placeholder="Password"  value='<?php echo e(old("password")); ?>'> <br>
<p>La password deve contenere almeno 8 caratteri,di cui almeno una lettera maiuscola,una cifra e un elemento speciale</p>
<span></span>
</div>

<div id='conf_password'>
<label for="conf_password">Conferma Password</label>
<input type="text" name="conf_password" placeholder="Conferma password">
<?php if($error == 'wrong_pw'): ?>
<section class="error">Le password non corrispondono</section>
<?php endif; ?>
<span></span>
</div>

<?php if($error == 'empty'): ?>
<section class="error">Compilare tutti i campi! </section>
<?php endif; ?>

<div class="submit">
    <input type="submit" value="Iscriviti ora!" id="submit_btn">
</div>

</form>

<span class="sub">Sei già registrato?<a id="log" href="<?php echo e(url('login')); ?>">LOGIN</a> </span>

</section>
</body>
</html><?php /**PATH C:\xampp\htdocs\HW2\resources\views/subscribe.blade.php ENDPATH**/ ?>