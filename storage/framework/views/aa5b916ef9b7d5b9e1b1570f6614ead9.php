<label class="block <?php echo e(($noMargin ?? false) ?'':'mt-4'); ?> text-sm">
    <div class='flex items-start'>

        <input class="mt-1 ltr:mr-5 rtl:ml-5"
        placeholder="<?php echo e($placeholder ?? ''); ?>"
        type="checkbox"
        value="<?php echo e($value ?? '1'); ?>"
        
        <?php if( $defer ?? true ): ?>
            wire:model.defer='<?php echo e($name ?? ''); ?>'
        <?php else: ?>
            wire:model='<?php echo e($name ?? ''); ?>'
        <?php endif; ?>

        />

        <div>
            <p class="font-semibold text-gray-700"><?php echo e($title ?? ''); ?></p>
            <p class="text-sm text-gray-600"><?php echo e($description ?? ''); ?></p>
            <?php echo e($slot ?? ''); ?>

        </div>
    </div>
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
<?php /**PATH D:\xampp8.1\htdocs\zuma backend\resources\views/components/checkbox.blade.php ENDPATH**/ ?>