<label class="block mt-4 text-sm">
    <span class="text-gray-700"><?php echo e($title ?? ''); ?></span>
    <textarea 
        id='<?php echo e($id ?? $name ?? ''); ?>'
        placeholder="<?php echo e($placeholder ?? ''); ?>"
        <?php if( $defer ?? true ): ?>
            wire:model.defer='<?php echo e($name ?? ''); ?>'
        <?php else: ?>
            wire:model='<?php echo e($name ?? ''); ?>'
        <?php endif; ?>
      class="w-full <?php echo e($h ?? 'h-40'); ?> p-2 mt-1 border rounded"></textarea>
      
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
<?php /**PATH D:\xampp8.1\htdocs\zuma backend\resources\views/components/textarea.blade.php ENDPATH**/ ?>