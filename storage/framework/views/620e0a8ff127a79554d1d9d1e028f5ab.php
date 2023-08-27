<?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($column->isVisible()): ?>
        <?php if($columnSelect && ! $this->isColumnSelectEnabled($column)) continue; ?>

        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-tables::tailwind.components.table.cell','data' => ['class' => method_exists($this, 'setTableDataClass') ? $this->setTableDataClass($column, $row) : '','id' => method_exists($this, 'setTableDataId') ? $this->setTableDataId($column, $row) : '','customAttributes' => method_exists($this, 'setTableDataAttributes') ? $this->setTableDataAttributes($column, $row) : []]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-tables::table.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setTableDataClass') ? $this->setTableDataClass($column, $row) : ''),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setTableDataId') ? $this->setTableDataId($column, $row) : ''),'customAttributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(method_exists($this, 'setTableDataAttributes') ? $this->setTableDataAttributes($column, $row) : [])]); ?>
            <?php if($column->asHtml): ?>
                <?php echo e(new \Illuminate\Support\HtmlString($column->formatted($row))); ?>

            <?php else: ?>
                <?php echo e($column->formatted($row)); ?>

            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\xampp8.1\htdocs\zuma backend\resources\views/vendor/livewire-tables/tailwind/components/table/row-columns.blade.php ENDPATH**/ ?>