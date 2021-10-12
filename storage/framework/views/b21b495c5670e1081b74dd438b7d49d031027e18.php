<?php
    $viewMenu = function($menus) use (&$viewMenu, $permissions) {
        $html = '';
        foreach($menus as $menu) {
            if(in_array($menu['gate'], $permissions)) {
                $html .= view('ladmin::components.menus._partials._sidebar_item', ['menu' => $menu, 'viewMenu' => $viewMenu]);
            }
        }
        return $html;
    }
?>

<ul>
  <li class="<?php echo e(request()->is(config('ladmin.prefix', 'administrator')) ? 'active' : null); ?>">
    <a href="<?php echo e(route('administrator.index')); ?>">
      <?php echo ladmin()->icon('view-boards'); ?> Dashboard
    </a>
  </li>

  <?php echo $viewMenu($menu->sidebar); ?>

</ul><?php /**PATH C:\laragon\www\manajemenspbe\vendor\hexters\ladmin\src/../Resources/Views/components/menus/sidebar.blade.php ENDPATH**/ ?>