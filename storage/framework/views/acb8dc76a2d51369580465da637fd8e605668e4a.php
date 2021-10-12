<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-lg-5 mt-5">
            <div class="text-center">
                <h4 class="font-weight-bold">Sign In</h4>
                <p><strong>Welcome!</strong> Go sign in to access administrator page.</p>
            </div>

            <?php if (isset($component)) { $__componentOriginalda6f0bf4112dccc2f395afa01beef8b3d0bbd23e = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Cores\Alert::class, []); ?>
<?php $component->withName('ladmin-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalda6f0bf4112dccc2f395afa01beef8b3d0bbd23e)): ?>
<?php $component = $__componentOriginalda6f0bf4112dccc2f395afa01beef8b3d0bbd23e; ?>
<?php unset($__componentOriginalda6f0bf4112dccc2f395afa01beef8b3d0bbd23e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Components\Card::class, ['class' => 'mt-3']); ?>
<?php $component->withName('ladmin-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

                <div class="text-center mb-3">
                    <?php if(config('ladmin.logo')): ?>
                        <img src="<?php echo e(config('ladmin.logo')); ?>" alt="Logo" width="150">
                    <?php else: ?> 
                        <?php echo e(config('app.name')); ?>

                    <?php endif; ?>
                </div>

                <form action="<?php echo e(url( config('ladmin.prefix', 'administrator') . '/login')); ?>" method="post" class="my-3 mx-4">
                    <?php echo csrf_field(); ?>
                    <?php if (isset($component)) { $__componentOriginalf9264bd33c179b142c11f62654d0a07f2c8a751c = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Components\Input::class, ['type' => 'email','name' => 'email','old' => true,'placeholder' => 'Email Address']); ?>
<?php $component->withName('ladmin-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('prepend', null, []); ?> 
                            <?php echo ladmin()->icon('at-symbol'); ?>

                         <?php $__env->endSlot(); ?>
                     <?php if (isset($__componentOriginalf9264bd33c179b142c11f62654d0a07f2c8a751c)): ?>
<?php $component = $__componentOriginalf9264bd33c179b142c11f62654d0a07f2c8a751c; ?>
<?php unset($__componentOriginalf9264bd33c179b142c11f62654d0a07f2c8a751c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginalf9264bd33c179b142c11f62654d0a07f2c8a751c = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Components\Input::class, ['type' => 'password','name' => 'password','placeholder' => 'Password']); ?>
<?php $component->withName('ladmin-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('prepend', null, []); ?> 
                            <?php echo ladmin()->icon('lock-closed'); ?>

                         <?php $__env->endSlot(); ?>
                     <?php if (isset($__componentOriginalf9264bd33c179b142c11f62654d0a07f2c8a751c)): ?>
<?php $component = $__componentOriginalf9264bd33c179b142c11f62654d0a07f2c8a751c; ?>
<?php unset($__componentOriginalf9264bd33c179b142c11f62654d0a07f2c8a751c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    
                    <div class="form-group">
                        <input type="checkbox" name="remember" id="remember"> <label for="remember">Remember me</label>
                        <a href="<?php echo e(route('administrator.password.request')); ?>" class="float-right mb-3">Forgot password ?</a>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">
                            Sign In
                        </button>
                    </div>
                </form>
             <?php if (isset($__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327)): ?>
<?php $component = $__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327; ?>
<?php unset($__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

            <div class="text-center mt-5">
                <a href="<?php echo e(url('/')); ?>">&larr; Back To Home</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('ladmin::layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\manajemenspbe\vendor\hexters\ladmin\src/../Resources/Views/auth/login.blade.php ENDPATH**/ ?>