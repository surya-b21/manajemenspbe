<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-log-<?php echo e($i); ?>">
  Show
</button>

<div class="modal fade text-left" id="modal-log-<?php echo e($i); ?>" tabindex="-1" role="dialog" aria-labelledby="modal-log-<?php echo e($i); ?>Label" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="modal-log-<?php echo e($i); ?>Label"><?php echo e($log['type']); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="table-responsive">
        <table class="table">
          <tbody>
            <tr>
              <td>Date</td>
              <td>
                <?php echo e(Carbon\Carbon::parse($log['timestamp'])->format('d/m/y H:i')); ?> -
                <?php echo e(Carbon\Carbon::parse($log['timestamp'])->diffForHumans()); ?>

              </td>
            </tr>
            <tr>
              <td>ENV</td>
              <td><?php echo e($log['env']); ?></td>
            </tr>
            <tr>
              <td>Type</td>
              <td>
                <span class="badge badge-<?php echo e($log['color'] ?? 'warning'); ?>"><?php echo e($log['type']); ?></span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-body bg-dark text-light">
        <?php echo e($log['message']); ?>

        </div>
      </div>
    </div>
  </div>
</div>
<?php /**PATH C:\laragon\www\manajemenspbe\vendor\hexters\ladmin\src/../Resources/Views/logs/_partials/_button_details.blade.php ENDPATH**/ ?>