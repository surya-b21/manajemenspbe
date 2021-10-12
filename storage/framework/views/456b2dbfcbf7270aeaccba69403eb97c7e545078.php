<?php if (isset($component)) { $__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Components\Card::class, []); ?>
<?php $component->withName('ladmin-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('flat', null, []); ?> 
    <div class="table-responsive">
      <table class="table ladmin-datatables table-striped m-0" data-options='<?php echo json_encode($options); ?>'>
        <thead>
          <tr>
            <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <th><?php echo e($field); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </div>
   <?php $__env->endSlot(); ?>
 <?php if (isset($__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327)): ?>
<?php $component = $__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327; ?>
<?php unset($__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\manajemenspbe\vendor\hexters\ladmin\src/../Resources/Views/components/components/datatables.blade.php ENDPATH**/ ?>