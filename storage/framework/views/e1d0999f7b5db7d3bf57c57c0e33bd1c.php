<div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden rounded-none md:rounded-lg">
    <table <?php echo e($attributes->except('wire:sortable')); ?> class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <?php echo e($head); ?>

            </tr>
        </thead>

        <tbody <?php echo e($attributes->only('wire:sortable')); ?> class="bg-white divide-y divide-gray-200">
            <?php echo e($body); ?>

        </tbody>
    </table>
</div>
<?php /**PATH D:\xampp8.1\htdocs\zuma backend\resources\views/vendor/livewire-tables/tailwind/components/table/table.blade.php ENDPATH**/ ?>