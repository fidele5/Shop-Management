<div class="btn-group btn-group-justified nav-buttons" role="group" aria-label="Basic example">
    <a href="<?php echo e(route('general-settings')); ?>" class="btn btn-outline-primary <?php echo e(active_if_full_match('settings/general')); ?>"><i class="fas fa-store-alt"></i> <?php echo e(__('pages.general_settings')); ?></a>
    <a href="<?php echo e(route('currency-settings')); ?>" class="btn btn-outline-primary <?php echo e(active_if_full_match('settings/currency')); ?>"><i class="fas fa-money-bill-alt"></i><?php echo e(__('pages.currency')); ?>  </a>
    <a href="<?php echo e(route('prefix-settings')); ?>" class="btn btn-outline-primary <?php echo e(active_if_full_match('settings/prefix')); ?>"><i class="fab fa-autoprefixer"></i> <?php echo e(__('pages.prefix')); ?> </a>
</div><?php /**PATH C:\xampp\htdocs\mbpos-1.3\resources\views/backend/settings/partial/nav.blade.php ENDPATH**/ ?>