<div>
    <?php if($showFilters && count($this->getFiltersWithoutSearch())): ?>
        <div class="mb-4 p-6 md:p-0">
            <small class="text-gray-700"><?php echo app('translator')->get('Applied Filters'); ?>:</small>

            <?php $__currentLoopData = $filters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key !== 'search' && strlen($value)): ?>
                    <span
                        wire:key="filter-pill-<?php echo e($key); ?>"
                        class="inline-flex items-center py-0.5 pl-2 pr-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-700"
                    >
                        <?php echo e($filterNames[$key] ?? collect($this->columns())->pluck('text', 'column')->get($key, ucwords(strtr($key, ['_' => ' ', '-' => ' '])))); ?>:
                        <?php if(isset($customFilters[$key]) && method_exists($customFilters[$key], 'options')): ?>
                            <?php echo e($customFilters[$key]->options()[$value] ?? $value); ?>

                        <?php else: ?>
                            <?php echo e(ucwords(strtr($value, ['_' => ' ', '-' => ' ']))); ?>

                        <?php endif; ?>

                        <button
                            wire:click="removeFilter('<?php echo e($key); ?>')"
                            type="button"
                            class="flex-shrink-0 ml-0.5 h-4 w-4 rounded-full inline-flex items-center justify-center text-indigo-400 hover:bg-indigo-200 hover:text-indigo-500 focus:outline-none focus:bg-indigo-500 focus:text-white"
                        >
                            <span class="sr-only"><?php echo app('translator')->get('Remove filter option'); ?></span>
                            <svg class="h-2 w-2" stroke="currentColor" fill="none" viewBox="0 0 8 8">
                                <path stroke-linecap="round" stroke-width="1.5" d="M1 1l6 6m0-6L1 7" />
                            </svg>
                        </button>
                    </span>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <button class="focus:outline-none active:outline-none" wire:click.prevent="resetFilters">
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                    <?php echo app('translator')->get('Clear'); ?>
                </span>
            </button>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH D:\xampp8.1\htdocs\zuma backend\resources\views/vendor/livewire-tables/tailwind/includes/filter-pills.blade.php ENDPATH**/ ?>