<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo e(config('app.name')); ?> | Administrator</title>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <meta name="robots" content="noindex,nofollow">
  <link rel="stylesheet" href="<?php echo e(asset('/css/ladmin/app.css')); ?>">
  
  <?php echo $styles ?? null; ?>


</head>
<body>
  
  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-0">
      <a class="navbar-brand mr-0 p-3" href="<?php echo e(route('administrator.index')); ?>">
        <?php if(config('ladmin.logo')): ?>
          <img src="<?php echo e(config('ladmin.logo')); ?>" alt="Logo" width="120">
        <?php else: ?> 
          <?php echo e(config('app.name')); ?>

        <?php endif; ?>
      </a>
      
      <ul class="navbar-nav mr-auto">
        <li>
          <button class="border-0 btn btn-link ladmin-sidebar-toggle" type="button">
            <?php echo ladmin()->icon('menu'); ?>

          </button>
          <span class="ladmin-greating">Hi, <?php echo e(Str::limit($ladminUser->name, 10)); ?> <small class="text-muted">/ <?php echo e($ladminUser->role->name); ?></small></span>
        </li>
      </ul>
      
      <ul class="ladmin-navbar-nav d-flex align-items-center justify-content-center ml-auto pr-3">
          <?php if (isset($component)) { $__componentOriginal852fe76d064f31da06e1d28ae2f555d60056abda = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Cores\Notification::class, []); ?>
<?php $component->withName('ladmin-notification'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal852fe76d064f31da06e1d28ae2f555d60056abda)): ?>
<?php $component = $__componentOriginal852fe76d064f31da06e1d28ae2f555d60056abda; ?>
<?php unset($__componentOriginal852fe76d064f31da06e1d28ae2f555d60056abda); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
          <li class="nav-item dropdown">
            
            <a id="navbarDropdown" class="nav-link dropdown-toggle pl-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              <img src="<?php echo e($ladminUser->gravatar_url); ?>" alt="Avatar" class="img-thumbnail rounded-circle" width="40">
            </a>

            <ul style="right:0;" class="dropdown-menu mt-2 rounded shadow-sm dropdown-menu-right ladmin-top-menu" aria-labelledby="navbarDropdown">
                <li class="ladmin-top-menu-body">
                  <?php if (isset($component)) { $__componentOriginal6f55bc41ac931523054d5987de8d2206e65e702a = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Menus\Toprightmenu::class, []); ?>
<?php $component->withName('ladmin-toprightmenu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal6f55bc41ac931523054d5987de8d2206e65e702a)): ?>
<?php $component = $__componentOriginal6f55bc41ac931523054d5987de8d2206e65e702a; ?>
<?php unset($__componentOriginal6f55bc41ac931523054d5987de8d2206e65e702a); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </li>
            </ul>
        </li>
      </ul>
    </nav>
    
    <div class="ladmin-container">
      <aside class="ladmin-sidebar">
        <strong class="ml-3">Main Menu</strong>
        <?php if (isset($component)) { $__componentOriginal3ae17243e5b03cc39a25e724646741f16692c113 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Menus\Sidebar::class, []); ?>
<?php $component->withName('ladmin-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal3ae17243e5b03cc39a25e724646741f16692c113)): ?>
<?php $component = $__componentOriginal3ae17243e5b03cc39a25e724646741f16692c113; ?>
<?php unset($__componentOriginal3ae17243e5b03cc39a25e724646741f16692c113); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
      </aside>

      <div class="ladmin-content">
        <div class="container">
          <?php if (isset($component)) { $__componentOriginalda6f0bf4112dccc2f395afa01beef8b3d0bbd23e = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Cores\Alert::class, []); ?>
<?php $component->withName('ladmin-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalda6f0bf4112dccc2f395afa01beef8b3d0bbd23e)): ?>
<?php $component = $__componentOriginalda6f0bf4112dccc2f395afa01beef8b3d0bbd23e; ?>
<?php unset($__componentOriginalda6f0bf4112dccc2f395afa01beef8b3d0bbd23e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        </div>
        <div class="ladmin-page-title">
          <div class="container" style="position: relative;">

            <div class="row">
              <div class="col-lg-6 position-relative align-middle">
                <h4 class="d-inline-block mr-2">
                  <?php if(request()->has('back')): ?>
                    <a href="<?php echo e(request()->get('back')); ?>" class="btn btn-outline-primary btn-sm mr-1 px-3">&larr;</a>
                  <?php endif; ?>
                  <?php echo $title ?? 'Title Page'; ?>

                </h4>
                <?php echo e($buttons ?? null); ?>

                
              </div>
              <div class="col-lg-6 breadcrumb-container">
                <?php if (isset($component)) { $__componentOriginala76c583ea25c75a293c6038caf3a44a3b35466fc = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Cores\Breadcrumb::class, []); ?>
<?php $component->withName('ladmin-breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginala76c583ea25c75a293c6038caf3a44a3b35466fc)): ?>
<?php $component = $__componentOriginala76c583ea25c75a293c6038caf3a44a3b35466fc; ?>
<?php unset($__componentOriginala76c583ea25c75a293c6038caf3a44a3b35466fc); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          
          <?php echo e($slot); ?>


        </div>
        
      </div>
      <footer class="ladmin-footer py-3 bg-white">
        <?php echo $__env->make('vendor.ladmin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </footer>

    </div>

  </div>

  <script src="<?php echo e(asset('/js/ladmin/app.js')); ?>"></script>
  
  <?php echo $scripts ?? null; ?>


</body>
</html>
<?php /**PATH C:\laragon\www\manajemenspbe\vendor\hexters\ladmin\src/../Resources/Views/layouts/app.blade.php ENDPATH**/ ?>