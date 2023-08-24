<?php $__env->startSection('title', 'Login'); ?>
<div>
    <div class="min-h-screen p-6 bg-gray-50 ">
        <div class="flex items-center ">
            <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl ">
                <div class="flex flex-col overflow-y-auto md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img aria-hidden="true" class="object-cover w-full h-full" src="<?php echo e(setting('loginImage', asset('images/login-office.jpeg'))); ?>" alt="Office" />
                    </div>
                    
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <form wire:submit.prevent="login">
                                <?php echo csrf_field(); ?>
                                <div class="flex items-center justify-between">
                                    <h1 class="mb-4 text-xl font-semibold text-gray-700"><?php echo e(__('Login')); ?></h1>
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('select.language-selector', [])->html();
} elseif ($_instance->childHasBeenRendered('l1109342994-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1109342994-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1109342994-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1109342994-0');
} else {
    $response = \Livewire\Livewire::mount('select.language-selector', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1109342994-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                </div>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['title' => ''.e(__('Email')).'','type' => 'email','placeholder' => 'info@mail.com','name' => 'email']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Email')).'','type' => 'email','placeholder' => 'info@mail.com','name' => 'email']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['title' => ''.e(__('Password')).'','type' => 'password','placeholder' => '***************','name' => 'password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Password')).'','type' => 'password','placeholder' => '***************','name' => 'password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                <div class="hidden">
                                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['title' => '','type' => '','placeholder' => '','name' => 'fcmToken']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => '','type' => '','placeholder' => '','name' => 'fcmToken']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                </div>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.checkbox','data' => ['description' => ''.e(__('Remember me')).'','name' => 'remember']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['description' => ''.e(__('Remember me')).'','name' => 'remember']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                <p class="flex items-center justify-end mt-2">
                                    <a class="text-sm font-medium text-primary-600 hover:underline" href="<?php echo e(route('password.forgot')); ?>">
                                        <?php echo e(__('Forgot your password?')); ?>

                                    </a>
                                </p>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.primary','data' => ['title' => ''.e(__('Login')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('buttons.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('Login')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            </form>

                            
                            <?php if( setting('partnersCanRegister',true) ): ?>

                            <div class="justify-center my-5 text-center">
                                <p class="flex items-center justify-center space-x-2">
                                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-briefcase'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-primary-500']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                                    <span class="my-2 text-sm font-light"><?php echo e(__(('Become a Vendor/Seller'))); ?></span> <a href="<?php echo e(route('register.vendor')); ?>" class="ml-2 font-bold text-primary-500 text-md"><?php echo e(__(('Click here'))); ?></a>
                                </p>
                                <p class="flex items-center justify-center space-x-2">
                                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-truck'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-primary-500']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                                    <span class="my-2 text-sm font-light"><?php echo e(__(('Become a Driver/Rider'))); ?></span> <a href="<?php echo e(route('register.driver')); ?>" class="ml-2 font-bold text-primary-500 text-md"><?php echo e(__(('Click here'))); ?></a>
                                </p>

                            </div>

                            <?php endif; ?>

                            <?php if(!App::environment('production')): ?>
                            <hr class="my-5" />
                            <div class="p-2 mb-5 bg-red-100 border rounded shadow cursor-pointer hover:shadow-lg" wire:click="loadAccount(0)">
                                <p class="font-medium ">Admin Account</p>
                                <p class="text-sm ">Email: admin@demo.com | Password: password</p>
                            </div>
                            <div class="p-2 mb-5 bg-red-100 border rounded shadow cursor-pointer hover:shadow-lg" wire:click="loadAccount(3)">
                                <p class="font-medium ">City-admin Account</p>
                                <p class="text-sm ">Email: city-admin@demo.com | Password: password</p>
                            </div>

                            <div class="p-2 mb-5 bg-purple-100 border rounded shadow cursor-pointer hover:shadow-lg" wire:click="loadAccount(1)">
                                <p class="font-medium ">Manager Account</p>
                                <p class="text-sm ">Email: manager@demo.com | Password: password</p>
                            </div>
                            <div class="p-2 mb-5 bg-purple-100 border rounded shadow cursor-pointer hover:shadow-lg" wire:click="loadAccount(2)">
                                <p class="font-medium ">Manager Account(Parcel Vendor)</p>
                                <p class="text-sm ">Email: manager1@demo.com | Password: password</p>
                            </div>
                            <div class="p-2 mb-5 bg-purple-100 border rounded shadow cursor-pointer hover:shadow-lg" wire:click="loadAccount(4)">
                                <p class="font-medium ">Manager Account(Service Vendor)</p>
                                <p class="text-sm ">Email: manager3@demo.com | Password: password</p>
                            </div>

                            <div class="p-2 mb-5 bg-green-100 border rounded shadow cursor-pointer hover:shadow-lg" >
                                <p class="font-medium ">Client Account (You can not login to backend)</p>
                                <p class="text-sm ">Email: client@demo.com | Password: password</p>
                            </div>



                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="p-2 mx-auto text-center">
            <p class="text-xs text-gray-500"><?php echo e(__('version')); ?> <?php echo e(setting('appVerison', "1.0.0" )); ?></p>
        </div>
    </div>
    
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
</div>
<?php /**PATH /Users/ambrosetemidayobako/Desktop/Dev/web/fuodz-admin/resources/views/livewire/auth/login.blade.php ENDPATH**/ ?>