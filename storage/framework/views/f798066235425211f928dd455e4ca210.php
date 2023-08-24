<div>
    <label class="block <?php echo e($title != null && !empty($title) ? 'mt-4' : ''); ?> text-sm">
        <?php if($title != null && !empty($title)): ?>
            <span class="text-gray-700"><?php echo e($title ?? ''); ?></span>
        <?php endif; ?>
        <input
            class='block w-full p-2 mt-1 text-sm border border-gray-300 rounded focus:border-primary-400 focus:outline-none focus:shadow-outline-primary'
            autocomplete="off" placeholder="<?php echo e($placeholder ?? ''); ?>" type="<?php echo e($type ?? 'text'); ?>"
            id='<?php echo e($elementId ?? ($name ?? '')); ?>' wire:model.debounce.700ms='<?php echo e($name ?? ''); ?>' />
        <?php $__errorArgs = [$name ?? ''];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="mt-1 text-xs text-red-700"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </label>

    
    <div class="p-2 text-sm text-gray-400" wire:loading wire:target="<?php echo e($name ?? ''); ?>">
        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-refresh'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-5 animate-spin']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
    </div>
    <div class="border rounded-sm shadow-sm bg-gray-50" wire:loading.remove wire:target="<?php echo e($name ?? ''); ?>">
        <?php $__currentLoopData = $addresses ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="px-4 py-2 text-sm text-gray-500 border-b cursor-pointer"
                x-on:click="livewire.emit('addressSelected',<?php echo e($key); ?>)">
                <?php echo e($address['name']); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</div>
<?php /**PATH /Users/ambrosetemidayobako/Desktop/Dev/web/fuodz-admin/resources/views/livewire/component/autocomplete-address.blade.php ENDPATH**/ ?>