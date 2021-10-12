<ul class="ladmin-top-menu-list">
  <?php $__currentLoopData = $menu->topRright; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(in_array($menu['gate'], $permissions)): ?>
      <?php
        $router = 'javascript:void(0);';
        if($menu['route']) {
          $route = $menu['route'][0];
          $params = $menu['route'][1] ?? [];
          $router = route($route, $params);
        }
      ?>
      <li>
        <a href="<?php echo e($router); ?>"><?php echo e($menu['name']); ?></a>
      </li>
    <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <li>
    <a href="javascript:void(0);" onclick="document.getElementById('ladmin-logout').submit()">Logout</a>
    <form action="<?php echo e(route('administrator.logout')); ?>" id="ladmin-logout" method="post"><?php echo csrf_field(); ?></form>
  </li>
</ul><?php /**PATH C:\laragon\www\manajemenspbe\vendor\hexters\ladmin\src/../Resources/Views/components/menus/top_right_menu.blade.php ENDPATH**/ ?>