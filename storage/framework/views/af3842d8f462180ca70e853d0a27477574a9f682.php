<?php if (isset($component)) { $__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Cores\Layout::class, []); ?>
<?php $component->withName('ladmin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('title', null, []); ?> Edit Role <?php $__env->endSlot(); ?>
    
  <form action="<?php echo e(route('administrator.access.role.update', $role->id)); ?>" method="post">
    <?php echo csrf_field(); ?> 
    <?php echo method_field('PUT'); ?>
    
    <?php echo $__env->make('vendor.ladmin.role._partials._form', ['role' => $role], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="text-right">
      <button type="submit" class="btn btn-primary">
        Update Role
      </button>
    </div>
  </form>

 <?php if (isset($__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9)): ?>
<?php $component = $__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9; ?>
<?php unset($__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\manajemenspbe\resources\views/vendor/ladmin/role/edit.blade.php ENDPATH**/ ?>