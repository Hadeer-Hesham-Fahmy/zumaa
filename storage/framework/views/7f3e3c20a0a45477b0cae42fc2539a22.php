<div class="mt-1 relative rounded-md shadow-sm">
    <select
        wire:model.stop="filters.<?php echo e($key); ?>"
        wire:key="filter-<?php echo e($key); ?>"
        id="filter-<?php echo e($key); ?>"
        class="rounded-md shadow-sm block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo sm:text-sm sm:leading-5"
    >
        <?php $__currentLoopData = $filter->options(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<?php /**PATH D:\xampp8.1\htdocs\zuma backend\resources\views/vendor/livewire-tables/tailwind/includes/filter-type-select.blade.php ENDPATH**/ ?>