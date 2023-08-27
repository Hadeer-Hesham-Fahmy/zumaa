<div x-data="{ openTab: <?php echo e($initialTab ?? 1); ?> }" <?php echo e($attributes->merge(['class' => 'bg-white rounded px-4 py-2'])); ?>>
    
    <div class="mt-4 space-x-4 flex items-center justify-start border-b border-gray-300 dark:border-gray-700">
        <?php echo e($header ?? ''); ?>

    </div>
    
    <div>
        <?php echo e($body ?? ''); ?>

    </div>
</div>
<?php /**PATH D:\xampp8.1\htdocs\zuma backend\resources\views/components/tab/tabview.blade.php ENDPATH**/ ?>