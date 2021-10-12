<div <?php echo e($attributes->merge(['class' => 'card border-0 shadow-sm rounded-lg ' . $class])); ?>>
  <?php if(isset($header)): ?>
    <div class="card-header">
      <?php echo e($header); ?>

    </div>
  <?php endif; ?>

  <?php if($image): ?>
    <img src="<?php echo e($image); ?>" class="card-img-top" alt="<?php echo e($title); ?>">
  <?php endif; ?>

  <?php if(empty($flat)): ?>
  <div class="card-body">
    <?php if($title): ?>
      <h4 class="card-title"><?php echo e($title); ?></h4>
    <?php endif; ?>
    <?php echo e($slot); ?>

  </div>
  <?php endif; ?>

  <?php if(isset($flat)): ?>
  <div>
    <?php echo e($flat); ?>

  </div>
  <?php endif; ?>
  <?php if(isset($footer)): ?>
    <div class="card-footer">
      <?php echo e($footer); ?>

    </div>
  <?php endif; ?>
</div><?php /**PATH C:\laragon\www\manajemenspbe\vendor\hexters\ladmin\src/../Resources/Views/components/components/card.blade.php ENDPATH**/ ?>