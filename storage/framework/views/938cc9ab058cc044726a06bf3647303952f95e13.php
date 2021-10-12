<?php if (isset($component)) { $__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Cores\Layout::class, []); ?>
<?php $component->withName('ladmin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('title', null, []); ?> Assign Permission <?php $__env->endSlot(); ?>
    
  <?php if (isset($component)) { $__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Components\Card::class, []); ?>
<?php $component->withName('ladmin-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <form action="<?php echo e(route('administrator.access.permission.update', $role->id)); ?>" method="post">
      <?php echo csrf_field(); ?> 
      <?php echo method_field('PUT'); ?>
      <?php
          $permissions = $role->gates;
          $viewMenu = function($menus) use (&$viewMenu, $permissions) {
              $html = '';
              foreach($menus as $menu) {
                $html .= view('vendor.ladmin.permission._partials._menus', [
                  'menu' => $menu,
                  'permissions' => $permissions,
                  'viewMenu' => $viewMenu
                ]);
              }
              return $html;
          }
      ?>
      
      <h3>Main Menu <small>(sidebar)</small></h3>
      <ul class="list-permissions">
        <?php echo $viewMenu($menu->sidebar); ?>

      </ul>
      
      <div class="mt-4 mb-3"></div>

      <h3>Top Right Menu</h3>
      <ul class="list-permissions">
        <?php echo $viewMenu($menu->topRright); ?>

      </ul>

      <div class="text-right">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('administrator.access.permission.assign')): ?>
          <button type="submit" class="btn btn-primary">Save Permission</button>
        <?php endif; ?>
      </div>
    </form>
   <?php if (isset($__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327)): ?>
<?php $component = $__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327; ?>
<?php unset($__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

 <?php if (isset($__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9)): ?>
<?php $component = $__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9; ?>
<?php unset($__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\manajemenspbe\resources\views/vendor/ladmin/permission/show.blade.php ENDPATH**/ ?>