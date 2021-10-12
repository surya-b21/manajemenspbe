<?php
  $rand = rand();    
?>
<li style="border-left:solid 1px #ddd;">
  <input class="permission-checkbox" style="vertical-align:top;margin-left:-5px;cursor:pointer;" type="checkbox" id="<?php echo e($rand); ?>" <?php echo e(in_array($menu['gate'], $permissions) ? 'checked' : null); ?> name="gates[]" value="<?php echo e($menu['gate']); ?>">
  <label for="<?php echo e($rand); ?>" style="cursor:pointer;">
    <strong><?php echo e($menu['name'] ?? $menu['title']); ?></strong>
    <p class="mb-0 text-muted"><?php echo e($menu['description'] ?? null); ?></p>
  </label>

  <?php if(isset($menu['submenus'])): ?>
    <ul>
      <?php echo $viewMenu($menu['submenus']); ?>

    </ul>
  <?php endif; ?>

  <?php if(isset($menu['gates']) && count($menu['gates']) > 0): ?>
    <button  style="text-decoration:none; width:90%;" type="button" class="btn ml-4 mb-3  btn-light btn-sm btn-block text-left" data-toggle="collapse" data-target="#collapse-<?php echo e($rand); ?>">
      <strong>Open Permission <i class="fas fa-caret-down float-right"></i></strong>
    </button>
    <ul class="collapse" id="collapse-<?php echo e($rand); ?>">
      <?php echo $viewMenu($menu['gates']); ?>

    </ul>
  <?php endif; ?>
</li><?php /**PATH C:\laragon\www\manajemenspbe\resources\views/vendor/ladmin/permission/_partials/_menus.blade.php ENDPATH**/ ?>