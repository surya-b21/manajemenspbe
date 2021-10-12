<li class="<?php echo e(request()->is( config('ladmin.prefix', 'administrator') . "/" . $menu['isActive']) ? 'active' : null); ?>" id="<?php echo e($menu['id'] ?? null); ?>">
  <?php 
    $router = 'javascript:void(0);';
    if($menu['route']) {
      $route = $menu['route'][0];
      $params = $menu['route'][1] ?? [];
      $router = route($route, $params);
    }
  ?>
  <a href="<?php echo e($router); ?>">
    <?php if(isset($menu['icon'])): ?>
      <?php echo ladmin()->icon($menu['icon']); ?>

    <?php endif; ?>
    <?php echo e($menu['name']); ?>

  </a>

  <?php if(isset($menu['submenus'])): ?>
    <ul>
      <?php echo $viewMenu($menu['submenus']); ?>

    </ul>
  <?php endif; ?>
</li>

<?php /**PATH C:\laragon\www\manajemenspbe\vendor\hexters\ladmin\src/../Resources/Views/components/menus/_partials/_sidebar_item.blade.php ENDPATH**/ ?>