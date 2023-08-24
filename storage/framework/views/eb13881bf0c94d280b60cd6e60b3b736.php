<?php if( $isTrue ?? $model[$column->attribute] ?? false ): ?>
    <span class="px-2 py-1 text-sm font-medium text-center text-white bg-green-500 rounded-xl"><?php echo e(__('Yes')); ?></span>
<?php else: ?>
    <span class="px-2 py-1 text-sm font-medium text-center text-white bg-red-500 rounded-xl"><?php echo e(__('No')); ?></span>
<?php endif; ?>
<?php /**PATH /Users/ambrosetemidayobako/Desktop/Dev/web/fuodz-admin/resources/views/components/table/bool.blade.php ENDPATH**/ ?>