<label class="block mt-4 text-sm">
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['title' => $title]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <div
        class="w-full p-2 bg-gray-100 border border-gray-300 border-dashed rounded"
        x-data="{ isUploading: false, progress: 0 }"
                x-on:livewire-upload-start="isUploading = true"
                x-on:livewire-upload-finish="isUploading = false"
                x-on:livewire-upload-error="isUploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress">

        <div x-show="!isUploading">

            
            <input type="file" class="hidden" accept="<?php echo e($rules ?? ''); ?>" <?php echo e(($multiple ?? false) ? 'multiple':''); ?>

                <?php if( $defer ?? true ): ?>
                    wire:model.defer='<?php echo e($name ?? ''); ?>'
                <?php else: ?>
                    wire:model='<?php echo e($name ?? ''); ?>'
                <?php endif; ?>
            />

            <?php if( !empty($photo) ): ?>

                <div class="flex items-center space-x-4">
                    <?php if( $image ?? true ): ?>
                        <img src="<?php echo e($photo->temporaryUrl() ?? ''); ?>" class="w-20 h-20">
                    <?php endif; ?>
                    <div class="font-light text-gray-500">
                        <p>Type: <?php echo e(Str::upper($photoInfo["extension"])); ?></p>
                        <p>Size: <?php echo e($photoInfo["size"]); ?> MB</p>
                        <button wire:click="$set('<?php echo e($name); ?>')" class="px-2 mt-2 text-xs text-red-400 border border-red-400 rounded">
                            <?php echo e(__('Remove')); ?>

                        </button>
                    </div>
                </div>

            <?php elseif( !empty($preview) ): ?>

                <div class="flex items-center space-x-4">
                    <img src="<?php echo e($preview); ?>" class="w-20 h-20">
                    <div class="font-light text-gray-500">
                        <div class="px-2 mt-2 text-xs border rounded text-primary-400 border-primary-400">
                            <?php echo e(__('Change')); ?>

                        </div>
                    </div>
                </div>

            <?php else: ?>

                
                <p class="flex items-center text-sm font-light text-gray-400">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-plus'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 p-1 text-gray-500 border rounded-full shadow ltr:mr-3 rtl:ml-3']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                    <?php echo e(__('Click/Tap to select media')); ?> | <?php echo e($types ?? 'Any File'); ?>

                </p>

            <?php endif; ?>







        </div>

        
        <!-- Progress Bar -->
        <div x-show="isUploading">
            <progress max="100" x-bind:value="progress" class="w-full h-1 overflow-hidden bg-red-500 rounded"></progress>
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
<?php /**PATH /Users/ambrosetemidayobako/Desktop/Dev/web/fuodz-admin/resources/views/components/media-upload.blade.php ENDPATH**/ ?>