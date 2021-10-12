<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check(['administrator.system.activity.delete'])): ?>
<a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#moda-confirmation">
  Delete
</a>

<div class="modal fade" id="moda-confirmation" tabindex="-1" aria-labelledby="moda-confirmationLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="moda-confirmationLabel">Delete Log</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Due you want to Delete data older than <?php echo e(config('ladmin.log_activity_life', 7)); ?> days?
      </div>
      <div class="modal-footer border-0">
        <form method="POST" id="form-delete-older-actifity" action="<?php echo e(route('administrator.system.activity.destroy', 0)); ?>">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-primary">Yes</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
<?php /**PATH C:\laragon\www\manajemenspbe\vendor\hexters\ladmin\src/../Resources/Views/logable/_button_delete.blade.php ENDPATH**/ ?>