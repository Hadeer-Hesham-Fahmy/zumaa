<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['customAttributes' => []]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['customAttributes' => []]); ?>
<?php foreach (array_filter((['customAttributes' => []]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<td <?php echo e($attributes->merge(array_merge(['class' => 'px-3 py-2 md:px-6 md:py-4 whitespace-normal text-sm leading-5 text-gray-900'], $customAttributes))); ?>>
    <?php echo e($slot); ?>

</td>
<?php /**PATH D:\xampp8.1\htdocs\zuma backend\resources\views/vendor/livewire-tables/tailwind/components/table/cell.blade.php ENDPATH**/ ?>