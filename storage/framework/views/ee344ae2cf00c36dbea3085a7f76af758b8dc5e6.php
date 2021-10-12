<?php if (isset($component)) { $__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Cores\Layout::class, []); ?>
<?php $component->withName('ladmin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('title', null, []); ?> System Log <?php $__env->endSlot(); ?>
  
    <div class="row">
      <div class="col-md-4 col-11">
        <div class="mb-3">
          <form action="" class="d-inline">
            <select onchange="submit();" name="log" id="" class="form-control">
              <?php $__empty_1 = true; $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <option <?php echo e($file == $item ? 'selected' : null); ?> value="<?php echo e($item); ?>">File <?php echo e($item); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
              <option value="">- Log file not available -</option>
              <?php endif; ?>
            </select>
          </form>
        </div>
      </div>
    </div>

    <?php if (isset($component)) { $__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327 = $component; } ?>
<?php $component = $__env->getContainer()->make(Hexters\Ladmin\Components\Components\Card::class, []); ?>
<?php $component->withName('ladmin-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
       <?php $__env->slot('flat', null, []); ?> 
        <div class="table-responsive">
          <table class="table ladmin-datatables">
            <thead>
              <tr>
                <th width="20%">Date</th>
                <th width="10%">ENV</th>
                <th width="10%">Type</th>
                <th width="50%">Message</th>
                <th width="10%"></th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td>
                      <?php if(isset($log['timestamp'])): ?>
                      <strong><?php echo e(Carbon\Carbon::parse($log['timestamp'])->format('d/m/y H:i')); ?></strong> <br/>
                      <small class="text-muted"><i class="far fa-clock"></i> <?php echo e(Carbon\Carbon::parse($log['timestamp'])->diffForHumans()); ?></small>
                      <?php endif; ?>
                    </td>
                    <td><?php echo e($log['env'] ?? '-'); ?></td>
                    <td>
                      <span class="badge badge-<?php echo e($log['color'] ?? 'warning'); ?>"><?php echo e($log['type'] ?? '-'); ?></span>
                    </td>
                    <td><?php echo e(isset($log['message']) ? Str::limit($log['message'], 50) : '-'); ?></td>
                    <td class="text-center">
                      <?php echo $__env->make('ladmin::logs._partials._button_details', ['log' => $log, 'id' => $i], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                  </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
       <?php $__env->endSlot(); ?>
     <?php if (isset($__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327)): ?>
<?php $component = $__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327; ?>
<?php unset($__componentOriginalc853da2edc4456fbd9b3e5943092bdd7c84d9327); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

 <?php if (isset($__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9)): ?>
<?php $component = $__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9; ?>
<?php unset($__componentOriginal8fa6684d1044afa553c489b91e9ef4fef90a9da9); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\manajemenspbe\vendor\hexters\ladmin\src/../Resources/Views/logs/index.blade.php ENDPATH**/ ?>