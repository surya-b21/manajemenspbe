<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo e(config('app.name')); ?> | Auth</title>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <meta name="robots" content="noindex,nofollow">
  <link rel="stylesheet" href="<?php echo e(asset('/css/ladmin/app.css')); ?>">
</head>
<body>
  
  <div id="app">
    <?php echo $__env->yieldContent('content'); ?>
  </div>

  <script src="<?php echo e(asset('/js/ladmin/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\manajemenspbe\vendor\hexters\ladmin\src/../Resources/Views/layouts/auth.blade.php ENDPATH**/ ?>