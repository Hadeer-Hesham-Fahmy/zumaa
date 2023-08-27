<div>
    <div
        <?php if(is_numeric($refresh)): ?>
            wire:poll.<?php echo e($refresh); ?>ms
        <?php elseif(is_string($refresh)): ?>
            <?php if($refresh === '.keep-alive' || $refresh === 'keep-alive'): ?>
                wire:poll.keep-alive
            <?php elseif($refresh === '.visible' || $refresh === 'visible'): ?>
                wire:poll.visible
            <?php else: ?>
                wire:poll="<?php echo e($refresh); ?>"
            <?php endif; ?>
        <?php endif; ?>
    >
        <?php echo $__env->make('livewire-tables::tailwind.includes.offline', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="flex-col">
            <?php echo $__env->make('livewire-tables::tailwind.includes.sorting-pills', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('livewire-tables::tailwind.includes.filter-pills', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="space-y-4">
                <div class="p-6 md:flex md:justify-between md:p-0">
                    <div class="w-full mb-4 space-y-4 md:mb-0 md:w-2/4 md:flex md:space-y-0 md:space-x-2">
                        <?php echo $__env->make('livewire-tables::tailwind.includes.reorder', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('livewire-tables::tailwind.includes.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('livewire-tables::tailwind.includes.filters', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>

                    <div class="md:flex md:items-center">
                        <div><?php echo $__env->make('livewire-tables::tailwind.includes.bulk-actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
                        <div><?php echo $__env->make('livewire-tables::tailwind.includes.column-select', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
                        <div><?php echo $__env->make('livewire-tables::tailwind.includes.per-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
                    </div>
                </div>

                <?php echo $__env->make('livewire-tables::tailwind.includes.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('livewire-tables::tailwind.includes.pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>

    <?php if(isset($modalsView)): ?>
        <?php echo $__env->make($modalsView, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
</div>
<?php /**PATH D:\xampp8.1\htdocs\zuma backend\resources\views/vendor/livewire-tables/tailwind/datatable.blade.php ENDPATH**/ ?>