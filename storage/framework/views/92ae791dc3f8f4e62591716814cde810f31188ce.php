<?php if (isset($component)) { $__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Cores\Layout::class, []); ?>
<?php $component->withName('ladmin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> Dashboard <?php $__env->endSlot(); ?>
    
    <div class="row">
        <div class="col-md-6 col-12">
            <?php if (isset($component)) { $__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Components\Card::class, []); ?>
<?php $component->withName('ladmin-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <h4 class="card-title">Welcome To The Ladmin Package</h4>
                <p>With this package you can save time in creating an admin page, because it is equipped with a Login page, Reset Password Permission layout, etc.</p>
                <p>
                    Visit for more plugins in this link <a href="https://github.com/hexters/ladmin/blob/master/readmes/plugins.md" target="_blank">Ladmin Plugins</a>
                </p>
             <?php if (isset($__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327)): ?>
<?php $component = $__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327; ?>
<?php unset($__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        </div>
        <div class="col-md-6 col-12">
            <?php if (isset($component)) { $__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Components\Card::class, []); ?>
<?php $component->withName('ladmin-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <h4 class="card-title">Ladmin File</h4>
                <strong>Controllers</strong>
                <div class="bg-light p-3">
                    <code>app/Http/Controllers/Administrator</code>
                </div>
                <strong>Default Blade</strong>
                <div class="bg-light p-3">
                    <code>resources/views/vendor/ladmin</code>
                </div>
                <strong>Sidebar Menu</strong>
                <div class="bg-light p-3">
                    <code>app/Menus</code>
                </div>
                <strong>Repositories</strong>
                <div class="bg-light p-3">
                    <code>app/Repositories</code>
                </div>
                <strong>DataTables Server</strong>
                <div class="bg-light p-3">
                    <code>app/DataTables</code>
                </div>
                <strong>Assets</strong>
                <div class="bg-light p-3">
                    <code>resources/js/ladmin</code> <br>
                    <code>resources/sass/ladmin</code>
                </div>
                <strong>Exception</strong>
                <div class="bg-light p-3">
                    <code>Hexters\Ladmin\Exceptions\LadminException</code>
                </div>
                <strong>Custom Style</strong>
                <p>
                    See more detail about custom style <a href="https://github.com/hexters/ladmin#custom-style" target="_blank">Documentation</a>
                </p>
                
             <?php if (isset($__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327)): ?>
<?php $component = $__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327; ?>
<?php unset($__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        </div>
    </div>

 <?php if (isset($__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9)): ?>
<?php $component = $__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9; ?>
<?php unset($__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\manajemenspbe\resources\views/vendor/ladmin/dashboard/index.blade.php ENDPATH**/ ?>