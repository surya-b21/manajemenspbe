<div class="form-group <?php echo e($type == 'horizontal' ? 'row' : ''); ?> ladmin-form-group">
    <label for="<?php echo e($name); ?>" class="<?php echo e($type == 'horizontal' ? 'col-md-' . $colLabel . ' col-form-label' : ''); ?> font-weight-bold">
        <?php echo e($label); ?>

        <?php if($help): ?>
            <button type="button" class="btn btn-sm btn-link" data-toggle="tooltip" data-placement="top" title="<?php echo e($help); ?>">
                <i class="far fa-question-circle"></i>
            </button>
        <?php endif; ?>
    </label>
    <div class="<?php echo e($type == 'horizontal' ? 'col-md-' . $colInput : ''); ?>">
        
        <div class="input-group border rounded">
            <?php if(isset($prepend)): ?>
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white border-0"><?php echo $prepend; ?></span>
                </div>    
            <?php endif; ?>
            
            <?php echo e($slot); ?>

            
            <?php if(isset($append)): ?>
                <div class="input-group-append ">
                    <span class="input-group-text bg-white border-0"><?php echo $append; ?></span>
                </div>
            <?php endif; ?>
            
            <?php if(isset($custom_btn)): ?>
                <div class="input-group-append ">
                    <?php echo $custom_btn; ?>

                </div>
            <?php endif; ?>
        </div>

        <?php if(isset($caption)): ?>
            <div>
                <?php echo $caption; ?>

            </div>
        <?php endif; ?>

        <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="text-danger font-weight-bold">
                * <?php echo e($message); ?>

            </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        
    </div>
</div><?php /**PATH C:\laragon\www\manajemenspbe\vendor\hexters\ladmin\src/../Resources/Views/components/components/form-group.blade.php ENDPATH**/ ?>