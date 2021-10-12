<?php if(isset($show)): ?>
  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($show['gate'])): ?>
    <a href="<?php echo e($show['url']); ?>" class="btn btn-link">
      <?php echo $show['title'] ?? ladmin()->icon('document-search'); ?>

    </a>
  <?php endif; ?>
<?php endif; ?>

<?php if(isset($edit)): ?>
  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($edit['gate'])): ?>
    <a href="<?php echo e($edit['url']); ?>" class="btn btn-link text-muted">
      <?php echo $edit['title'] ?? ladmin()->icon('pencil-alt'); ?>

    </a>
  <?php endif; ?>
<?php endif; ?>

<?php if(isset($destroy)): ?>
  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($destroy['gate'])): ?>
    <a href="<?php echo e($destroy['url']); ?>" class="btn btn-link" data-toggle="modal" data-target="#action-<?php echo e(Str::slug($destroy['url'])); ?>">
      <?php echo $destroy['title'] ?? ladmin()->icon('trash'); ?>

    </a>

    <div class="modal fade" id="action-<?php echo e(Str::slug($destroy['url'])); ?>" tabindex="-1" role="dialog" aria-labelledby="action-<?php echo e(Str::slug($destroy['url'])); ?>Label" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <form action="<?php echo e($destroy['url']); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <div class="modal-header border-0">
              <h5 class="modal-title" id="action-<?php echo e(Str::slug($destroy['url'])); ?>Label">Delete!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Do you want to delete this item?
            </div>
            <div class="modal-footer border-0">
              <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">NO</button>
              <button type="submit" class="btn btn-sm btn-danger">YES</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endif; ?>
<?php endif; ?><?php /**PATH C:\laragon\www\manajemenspbe\vendor\hexters\ladmin\src/../Resources/Views/table/action.blade.php ENDPATH**/ ?>