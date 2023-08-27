<?php if($bulkActionsEnabled && count($bulkActions) && (($selectPage && $rows->total() > $rows->count()) || count($selected))): ?>
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-tables::tailwind.components.table.row','data' => ['wire:key' => 'row-message','class' => 'bg-indigo-50']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-tables::table.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:key' => 'row-message','class' => 'bg-indigo-50']); ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-tables::tailwind.components.table.cell','data' => ['colspan' => $colspan]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-tables::table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colspan' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($colspan)]); ?>
            <?php if(count($selected) && !$selectAll && !$selectPage): ?>
                <div>
                    <span>
                        <?php echo app('translator')->get('You have selected'); ?>
                        <strong><?php echo e(count($selected)); ?></strong>
                        <?php echo app('translator')->get(':rows', ['rows' => count($selected) === 1 ? 'row' : 'rows']); ?>.
                    </span>

                    <button
                        wire:click="resetBulk"
                        wire:loading.attr="disabled"
                        type="button"
                        class="ml-1 text-sm font-medium leading-5 text-gray-700 text-blue-600 underline transition duration-150 ease-in-out focus:outline-none focus:text-gray-800 focus:underline"
                    >
                        <?php echo app('translator')->get('Unselect All'); ?>
                    </button>
                </div>
            <?php elseif($selectAll): ?>
                <div>
                    <span>
                        <?php echo app('translator')->get('You are currently selecting all'); ?>
                        <strong><?php echo e(number_format($rows->total())); ?></strong>
                        <?php echo app('translator')->get('rows'); ?>.
                    </span>

                    <button
                        wire:click="resetBulk"
                        wire:loading.attr="disabled"
                        type="button"
                        class="ml-1 text-sm font-medium leading-5 text-gray-700 text-blue-600 underline transition duration-150 ease-in-out focus:outline-none focus:text-gray-800 focus:underline"
                    >
                        <?php echo app('translator')->get('Unselect All'); ?>
                    </button>
                </div>
            <?php else: ?>
                <?php if($rows->total() === count($selected)): ?>
                    <div>
                        <span>
                            <?php echo app('translator')->get('You have selected'); ?>
                            <strong><?php echo e(count($selected)); ?></strong>
                            <?php echo app('translator')->get(':rows', ['rows' => count($selected) === 1 ? 'row' : 'rows']); ?>.
                        </span>

                        <button
                            wire:click="resetBulk"
                            wire:loading.attr="disabled"
                            type="button"
                            class="ml-1 text-sm font-medium leading-5 text-gray-700 text-blue-600 underline transition duration-150 ease-in-out focus:outline-none focus:text-gray-800 focus:underline"
                        >
                            <?php echo app('translator')->get('Unselect All'); ?>
                        </button>
                    </div>
                <?php else: ?>
                    <div>
                        <span>
                            <?php echo app('translator')->get('You have selected'); ?>
                            <strong><?php echo e($rows->count()); ?></strong>
                            <?php echo app('translator')->get('rows, do you want to select all'); ?>
                            <strong><?php echo e(number_format($rows->total())); ?></strong>?
                        </span>

                        <button
                            wire:click="selectAll"
                            wire:loading.attr="disabled"
                            type="button"
                            class="ml-1 text-sm font-medium leading-5 text-gray-700 text-blue-600 underline transition duration-150 ease-in-out focus:outline-none focus:text-gray-800 focus:underline"
                        >
                            <?php echo app('translator')->get('Select All'); ?>
                        </button>

                        <button
                            wire:click="resetBulk"
                            wire:loading.attr="disabled"
                            type="button"
                            class="ml-1 text-sm font-medium leading-5 text-gray-700 text-blue-600 underline transition duration-150 ease-in-out focus:outline-none focus:text-gray-800 focus:underline"
                        >
                            <?php echo app('translator')->get('Unselect All'); ?>
                        </button>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH D:\xampp8.1\htdocs\zuma backend\resources\views/vendor/livewire-tables/tailwind/includes/bulk-select-row.blade.php ENDPATH**/ ?>