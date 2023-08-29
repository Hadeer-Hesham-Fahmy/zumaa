<?php $__env->startSection('title', 'Become A Partner'); ?>
<div>
    <?php if( setting('partnersCanRegister',true) ): ?>
    <?php
    $img = setting('loginImage', "");
    if(!empty($img)){
    $bg = "bg-[url('".setting('loginImage')."')]";
    }else{
    $bg = "bg-gray-50";
    }
    ?>
    <div class="flex items-center min-h-screen <?php echo e($bg); ?> md:flex ">
        <div class="py-4 mx-auto my-10 overflow-y-auto">
            <div class="w-11/12 h-full max-w-xl mx-auto my-12 overflow-hidden bg-white rounded-lg shadow-lg shadow-slate-400 md:my-auto md:max-w-2xl ">
                <div class="flex flex-col overflow-y-auto md:flex-row">
                    <div class="flex items-center justify-center w-full p-6 sm:p-12 ">
                        <div class="w-full">
                            <div class="flex items-center justify-between">
                                <h1 class="w-full mb-4 text-3xl font-bold text-gray-700 uppercase">
                                    <?php echo e(__('Become a partner')); ?>

                                </h1>
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('select.language-selector', [])->html();
} elseif ($_instance->childHasBeenRendered('l871191446-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l871191446-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l871191446-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l871191446-0');
} else {
    $response = \Livewire\Livewire::mount('select.language-selector', []);
    $html = $response->html();
    $_instance->logRenderedChild('l871191446-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            </div>
                            
                            <div id="tab_wrapper">
                                <?php echo $__env->make('livewire.auth.register.partials.vendor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <p class="my-4 text-center">
                                    <?php echo e(__('Already have an account?')); ?> <a href="<?php echo e(route('login')); ?>" class="ml-2 font-bold text-primary-500 text-md"><?php echo e(__('Login')); ?></a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php else: ?>
    
    <div class="w-full p-12 mx-auto my-12 rounded-sm shadow md:w-5/12 lg:w-4/12 ">
        <p class="mb-2 text-2xl font-semibold"><?php echo e(__('Registration Page Not available')); ?></p>
        <p class="text-sm">
            <?php echo e(__('Partner account registration is currently unavailable. Please stay tune/contact support regarding further instruction about registering for a partners account. Thank you')); ?>

        </p>
        <p class='mt-4 text-center'><a href="<?php echo e(route('contact')); ?>" class="underline text-primary-600"><?php echo e(__('Contact Us')); ?></a></p>
    </div>
    <?php endif; ?>
    
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.loading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <?php echo $__env->make('layouts.partials.phoneselector', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH D:\xampp8.1\htdocs\zuma backend\resources\views/livewire/auth/register/register.blade.php ENDPATH**/ ?>