<?php if( $driverType == "taxi"): ?>
<hr class="my-4" />
<p class="font-light"><?php echo e(__('Vehicle Details')); ?></p>
<div class="grid grid-cols-2 gap-4">
    
    <div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('component.autocomplete-input', ['title' => ''.e(__('Car Make')).'','column' => 'name','model' => 'CarMake','emitFunction' => 'autocompleteCategorySelected'])->html();
} elseif ($_instance->childHasBeenRendered('l2599257222-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2599257222-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2599257222-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2599257222-0');
} else {
    $response = \Livewire\Livewire::mount('component.autocomplete-input', ['title' => ''.e(__('Car Make')).'','column' => 'name','model' => 'CarMake','emitFunction' => 'autocompleteCategorySelected']);
    $html = $response->html();
    $_instance->logRenderedChild('l2599257222-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['message' => ''.e($errors->first('car_make_id')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['message' => ''.e($errors->first('car_make_id')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </div>

    
    <div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('component.autocomplete-input', ['title' => ''.e(__('Car Model')).'','column' => 'name','model' => 'CarModel','updateQueryClauseName' => 'carModelQueryClasueUpdate','queryClause' => $carModelSearchClause,'emitFunction' => 'autocompleteAddressSelected'])->html();
} elseif ($_instance->childHasBeenRendered('l2599257222-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l2599257222-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2599257222-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2599257222-1');
} else {
    $response = \Livewire\Livewire::mount('component.autocomplete-input', ['title' => ''.e(__('Car Model')).'','column' => 'name','model' => 'CarModel','updateQueryClauseName' => 'carModelQueryClasueUpdate','queryClause' => $carModelSearchClause,'emitFunction' => 'autocompleteAddressSelected']);
    $html = $response->html();
    $_instance->logRenderedChild('l2599257222-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['message' => ''.e($errors->first('car_model_id')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['message' => ''.e($errors->first('car_model_id')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </div>
</div>

<div class="grid grid-cols-2 gap-4">
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['title' => ''.e(__('Registration Number')).'','name' => 'reg_no']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Registration Number')).'','name' => 'reg_no']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['title' => ''.e(__('Color')).'','name' => 'color']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Color')).'','name' => 'color']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select','data' => ['title' => ''.e(__('Vehicle Type')).'','options' => $vehicleTypes ?? [],'name' => 'vehicle_type_id','defer' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Vehicle Type')).'','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($vehicleTypes ?? []),'name' => 'vehicle_type_id','defer' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
</div>
<?php endif; ?>
<?php /**PATH D:\xampp8.1\htdocs\zuma backend\resources\views/livewire/auth/register/partials/taxi_driver.blade.php ENDPATH**/ ?>