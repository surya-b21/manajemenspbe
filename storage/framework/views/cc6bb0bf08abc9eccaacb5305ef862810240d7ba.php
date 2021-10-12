<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-detail-activity-<?php echo e($item->id); ?>">
  Show
</button>

<div class="modal text-left fade" id="modal-detail-activity-<?php echo e($item->id); ?>" tabindex="-1" aria-labelledby="modal-detail-activity-<?php echo e($item->id); ?>Label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="modal-detail-activity-<?php echo e($item->id); ?>Label">Activity</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="table-responsive">
        <table class="table">
          <tbody>
            <tr>
              <td colspan="2">
                <p class="card-title font-weight-bold my-2">User Account</p>
              </td>
            </tr>
            <tr>
              <td>Date</td>
              <td><?php echo e($item->created_at->format('d/m/y H:i')); ?> - <?php echo e($item->created_at->diffForHumans()); ?></td>
            </tr>
            <tr>
              <td>Name</td>
              <td><?php echo e($item->user->name); ?></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><?php echo e($item->user->email); ?></td>
            </tr>

            <tr>
              <td>Event Type</td>
              <td>
                <span class="badge badge-<?php echo e($item->colors[$item->type] ?? 'warning'); ?>">
                  <?php echo e(ucwords($item->type)); ?>

                </span>
              </td>
            </tr>

            <tr>
              <td>Model</td>
              <td><?php echo e(ucwords($item->logable_type)); ?></td>
            </tr>
            <tr>
              <td>ID</td>
              <td><?php echo e(ucwords($item->logable_id)); ?></td>
            </tr>
            <tr>
              <td colspan="2">
                <p class="card-title font-weight-bold my-2">New Data</p>
              </td>
            </tr>

            <?php $__currentLoopData = (Array) $item->new_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $new = is_array($data) ? json_encode($data) : $data;
                $old = isset($item->old_data[$field]) ? is_array($item->old_data[$field]) ? json_encode($item->old_data[$field]) : $item->old_data[$field] : $new
            ?>
                <tr>
                  <td><?php echo e($field); ?></td>
                  <td class="<?php echo e(($old === $new) ? '' : 'text-danger'); ?>"><?php echo $new; ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <tr>
              <td colspan="2">
                <p class="card-title font-weight-bold my-2">Old Data</p>
              </td>
            </tr>

            <?php $__empty_1 = true; $__currentLoopData = (Array) $item->old_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <?php
                  $old = is_array($data) ? json_encode($data) : $data;
                  $new = isset($item->new_data[$field]) ? is_array($item->new_data[$field]) ? json_encode($item->new_data[$field]) : $item->new_data[$field] : $old
              ?>
                <tr>
                  <td><?php echo e($field); ?></td>
                  <td class="<?php echo e(($old === $new) ? '' : 'text-warning'); ?>"><?php echo $old; ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
                <tr>
                  <td colspan="2">No data available</td>
                </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div><?php /**PATH C:\laragon\www\manajemenspbe\vendor\hexters\ladmin\src/../Resources/Views/logable/_table_buttons.blade.php ENDPATH**/ ?>