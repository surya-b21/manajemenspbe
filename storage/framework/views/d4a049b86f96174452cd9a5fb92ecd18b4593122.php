<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('administrator.access.role.create')): ?>
  <a href="<?php echo e(route('administrator.access.role.create', ['back' => request()->fullUrl()])); ?>" class="btn btn-sm btn-primary">Create Role</a>
<?php endif; ?><?php /**PATH C:\laragon\www\manajemenspbe\resources\views/vendor/ladmin/role/_partials/_topButton.blade.php ENDPATH**/ ?>