<?php if(config('ladmin.notification', true)): ?>
  <li class="nav-item dropdown mr-2">
                
    <a id="navbarDropdown" class="nav-link dropdown-toggle pl-0 ladmin-notification-menu" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
      <?php echo ladmin()->icon('bell'); ?>

      
      <?php if($total > 0): ?>
        <span class="badge badge-sm badge-danger badge-pill mr-2"><?php echo e($total > 9 ? '9+' : $total); ?></span>
      <?php endif; ?>
    </a>

    <ul class="dropdown-menu shadow-sm mt-3 rounded dropdown-menu-right ladmin-top-menu ladmin-notification-menu-component" aria-labelledby="navbarDropdown">
        <li class="ladmin-top-menu-header">
          <form action="<?php echo e(route('administrator.notification.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button class="btn btn-link btn-sm float-right">
              Mark all as read ?
            </button>
            <strong>Notifications</strong>
          </form>
        </li>
        <li class="ladmin-top-menu-body-notification">
          
          <div class="list-unstyled ladmin-notification-item">
            <?php $__empty_1 = true; $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <a href="<?php echo e(route('administrator.notification.show', [$item->id])); ?>" data-link="<?php echo e($item->link); ?>" class="media my-4">
                <?php if(!is_null($item->data['image_link'])): ?>
                  <img src="<?php echo e($item->data['image_link']); ?>" class="mr-3" width="50">
                <?php endif; ?>
                <div class="media-body ladmin-substr">
                  <small class="text-muted float-right"><?php echo e($item->created_at->diffForHumans()); ?></small>
                  <strong class="mt-0 mb-1"><?php echo e($item->data['title']); ?></strong>
                  <p class="m-0"><?php echo $item->data['description']; ?></p>
                </div>
              </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="pt-5 text-center d-flex align-items-center justify-content-center">
                  <?php echo ladmin()->icon('bell'); ?>

                  <div class="text-muted ml-3">No Notification</div>
                </div>
            <?php endif; ?>
          </div>

        </li>
        <li class="ladmin-top-menu-footer">
          <a href="<?php echo e(route('administrator.notification.index')); ?>">
            View All
          </a>
        </li>
    </ul>
  </li>
<?php endif; ?><?php /**PATH C:\laragon\www\manajemenspbe\vendor\hexters\ladmin\src/../Resources/Views/components/cores/notification.blade.php ENDPATH**/ ?>