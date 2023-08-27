<?php if($showSearch): ?>
    <div class="flex rounded-md shadow-sm ltr:mr-4 rtl:ml-4">
        <input
            wire:model<?php echo e($this->searchFilterOptions); ?>="filters.search"
            placeholder="<?php echo e(__('Search')); ?>"
            type="text"
            class="flex-1 shadow-sm border-gray-300 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo <?php if(isset($filters['search']) && strlen($filters['search'])): ?> rounded-none rounded-l-md <?php else: ?> rounded-md <?php endif; ?>"
        />

        <?php if(isset($filters['search']) && strlen($filters['search'])): ?>
            <span wire:click="$set('filters.search', null)" class="inline-flex items-center px-3 text-gray-500 border border-l-0 border-gray-300 cursor-pointer rounded-r-md bg-gray-50 sm:text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </span>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH D:\xampp8.1\htdocs\zuma backend\resources\views/vendor/livewire-tables/tailwind/includes/search.blade.php ENDPATH**/ ?>