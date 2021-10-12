<ol class="breadcrumb">
  <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($loop->last): ?>
      <li class="breadcrumb-item active">
        <?php echo e($item['name']); ?>

      </li>
    <?php else: ?> 
      <li class="breadcrumb-item">
        <a href="<?php echo e($item['url']); ?>"><?php echo e($item['name']); ?></a>
      </li>
      <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol><?php /**PATH C:\laragon\www\manajemenspbe\vendor\hexters\ladmin\src/../Resources/Views/components/cores/breadcrumb.blade.php ENDPATH**/ ?>