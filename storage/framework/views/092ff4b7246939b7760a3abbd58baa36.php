<?php if($reorderEnabled): ?>
    <button
        wire:click="<?php echo e($reordering ? 'disableReordering' : 'enableReordering'); ?>"
        type="button"
        class="inline-flex justify-center items-center w-full md:w-auto px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150"
    >
        <?php if($reordering): ?>
            <?php echo app('translator')->get('Done Reordering'); ?>
        <?php else: ?>
            <?php echo app('translator')->get('Reorder'); ?>
        <?php endif; ?>
    </button>
<?php endif; ?>
<?php /**PATH /Users/ambrosetemidayobako/Desktop/Dev/web/fuodz-admin/resources/views/vendor/livewire-tables/tailwind/includes/reorder.blade.php ENDPATH**/ ?>