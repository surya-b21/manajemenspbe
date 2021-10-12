<?php if (isset($component)) { $__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Components\FormGroup::class, ['name' => 'name','label' => 'Role Name *']); ?>
<?php $component->withName('ladmin-form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('prepend', null, []); ?> 
    <?php echo ladmin()->icon('desktop-computer'); ?>

   <?php $__env->endSlot(); ?>

  <input type="text" placeholder="Role Name" class="form-control" name="name" id="name" value="<?php echo e(old('name', $role->name)); ?>" required>
 <?php if (isset($__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857)): ?>
<?php $component = $__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857; ?>
<?php unset($__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\manajemenspbe\resources\views/vendor/ladmin/role/_partials/_form.blade.php ENDPATH**/ ?>