<?php if (isset($component)) { $__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Components\FormGroup::class, ['name' => 'name','label' => 'Full Name *']); ?>
<?php $component->withName('ladmin-form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('prepend', null, []); ?> 
    <?php echo ladmin()->icon('user-circle'); ?>

   <?php $__env->endSlot(); ?>

  <input type="text" placeholder="Full Name" class="form-control" name="name" id="name" required value="<?php echo e(old('name', $user->name)); ?>">
 <?php if (isset($__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857)): ?>
<?php $component = $__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857; ?>
<?php unset($__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Components\FormGroup::class, ['name' => 'email','label' => 'E-mail Address *']); ?>
<?php $component->withName('ladmin-form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('prepend', null, []); ?> 
    <?php echo ladmin()->icon('at-symbol'); ?>

   <?php $__env->endSlot(); ?>

  <input type="email" placeholder="E-mail Address" class="form-control" name="email" id="email" required value="<?php echo e(old('email', $user->email)); ?>">
 <?php if (isset($__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857)): ?>
<?php $component = $__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857; ?>
<?php unset($__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Components\FormGroup::class, ['name' => 'pass','label' => 'Password *']); ?>
<?php $component->withName('ladmin-form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('prepend', null, []); ?> 
    <?php echo ladmin()->icon('lock-closed'); ?>

   <?php $__env->endSlot(); ?>

  <input type="password" placeholder="Password" class="form-control" name="pass" id="pass">
 <?php if (isset($__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857)): ?>
<?php $component = $__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857; ?>
<?php unset($__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>


<?php if(isset($roles)): ?>
<?php if (isset($component)) { $__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Components\FormGroup::class, ['name' => 'role_id','label' => 'Role *']); ?>
<?php $component->withName('ladmin-form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('prepend', null, []); ?> 
    <?php echo ladmin()->icon('desktop-computer'); ?>

   <?php $__env->endSlot(); ?>

  <select name="role_id" id="role_id" class="form-control border-0" required>
    <option value="">- Select Role -</option>
    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($role->id); ?>" <?php echo e(isset($user->role->id) && $user->role->id == $role->id ? 'selected' : ''); ?>><?php echo e($role->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select>
 <?php if (isset($__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857)): ?>
<?php $component = $__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857; ?>
<?php unset($__componentOriginal487f0084572f8a51f52df60f00c4d6a48bb86857); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php endif; ?><?php /**PATH C:\laragon\www\manajemenspbe\resources\views/vendor/ladmin/user/_partials/_form.blade.php ENDPATH**/ ?>