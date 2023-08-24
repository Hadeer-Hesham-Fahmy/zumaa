<?php if( $model->is_active ?? $active ?? false ): ?>
    <span class="px-2 py-1 text-sm font-medium text-center text-white bg-green-500 rounded-xl"><?php echo e(__('Active')); ?></span>
<?php else: ?>
    <span class="px-2 py-1 text-sm font-medium text-center text-white bg-red-500 rounded-xl"><?php echo e(__('Inactive')); ?></span>
<?php endif; ?>
<?php /**PATH /Users/ambrosetemidayobako/Desktop/Dev/web/fuodz-admin/resources/views/components/table/active.blade.php ENDPATH**/ ?>