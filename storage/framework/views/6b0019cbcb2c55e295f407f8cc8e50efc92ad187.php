<div <?php echo e($attributes->merge(['class' => 'form-group ' . $class])); ?>>
  <?php if($label): ?>
    <label class="font-weight-bold" for="<?php echo e($name); ?>"><?php echo e($label); ?></label>
  <?php endif; ?>
  <div class="input-group border rounded <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
    <?php if(isset($prepend)): ?>
      <div class="input-group-prepend">
          <span class="input-group-text bg-white border-0">
            <?php echo e($prepend); ?>

          </span>
      </div>
    <?php endif; ?>
    <input type="<?php echo e($type); ?>" name="<?php echo e($name); ?>" id="<?php echo e($name); ?>" placeholder="<?php echo e($placeholder); ?>" value="<?php echo $old ? old($name, $value) : $value; ?>" <?php echo e($required ? 'required' : null); ?> class="form-control border-0">
    <?php if(isset($append)): ?>
      <div class="input-group-append">
          <span class="input-group-text bg-white border-0">
            <?php echo e($append); ?>

          </span>
      </div>
    <?php endif; ?>
  </div>
  <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <span class="invalid-feedback" role="alert">
          <strong><?php echo e($message); ?></strong>
      </span>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH C:\laragon\www\manajemenspbe\vendor\hexters\ladmin\src/../Resources/Views/components/components/input.blade.php ENDPATH**/ ?>