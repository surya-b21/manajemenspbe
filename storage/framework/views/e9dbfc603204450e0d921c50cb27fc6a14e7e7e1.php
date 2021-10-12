<?php if (isset($component)) { $__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Cores\Layout::class, []); ?>
<?php $component->withName('ladmin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('title', null, []); ?> <?php echo e($title ?? null); ?> <?php $__env->endSlot(); ?>
  
   <?php $__env->slot('buttons', null, []); ?> 
    <?php echo $buttons ?? null; ?>

   <?php $__env->endSlot(); ?>

  <?php if (isset($component)) { $__componentOriginale503c0fba2f390a88b97db72dcbdf3c4ea05127f = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Components\Datatables::class, ['fields' => $fields,'options' => $options]); ?>
<?php $component->withName('ladmin-datatables'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginale503c0fba2f390a88b97db72dcbdf3c4ea05127f)): ?>
<?php $component = $__componentOriginale503c0fba2f390a88b97db72dcbdf3c4ea05127f; ?>
<?php unset($__componentOriginale503c0fba2f390a88b97db72dcbdf3c4ea05127f); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

 <?php if (isset($__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9)): ?>
<?php $component = $__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9; ?>
<?php unset($__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\manajemenspbe\vendor\hexters\ladmin\src/../Resources/Views/ladmin/index.blade.php ENDPATH**/ ?>