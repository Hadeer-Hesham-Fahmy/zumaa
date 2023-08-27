<?php if($paginationEnabled && $showPerPage): ?>
    <div class="w-full ml-0 md:w-auto md:ltr:ml-2 md:rtl:mr-2">
        <select
            wire:model="perPage"
            id="perPage"
            class="block w-full py-2 pl-3 pr-10 text-base leading-6 border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo sm:text-sm sm:leading-5"
        >
            <?php $__currentLoopData = $perPageAccepted; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item); ?>"><?php echo e($item === -1 ? __('All') : $item); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
<?php endif; ?>
<?php /**PATH D:\xampp8.1\htdocs\zuma backend\resources\views/vendor/livewire-tables/tailwind/includes/per-page.blade.php ENDPATH**/ ?>