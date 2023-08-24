<div>
    <header class="z-10 py-4 bg-white shadow-md ">
        <div class="container flex items-center justify-between h-full px-6 mx-auto text-primary-600 dark:text-primary-300">
            <!-- Mobile hamburger -->
            <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-primary" @click="toggleSideMenu" aria-label="Menu">
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
            
            <button class="hidden p-1 mr-5 -ml-1 rounded-md md:block focus:outline-none focus:shadow-outline-primary" @click="toggleDesktopSideMenu" id="toggleSideMenuBtn" aria-label="Menu">
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <ul class="flex items-center flex-shrink-0 space-x-6 ltr:ml-auto rtl:mr-auto">


                <!-- Profile menu -->
                <li class="relative">
                    <div class="flex items-center align-middle">
                        
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select-xs','data' => ['options' => $languages,'name' => 'locale','defer' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select-xs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($languages),'name' => 'locale','defer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                        
                        <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasAnyRole', 'manager')): ?>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('header.vendor-selector')->html();
} elseif ($_instance->childHasBeenRendered('l533749473-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l533749473-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l533749473-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l533749473-0');
} else {
    $response = \Livewire\Livewire::mount('header.vendor-selector');
    $html = $response->html();
    $_instance->logRenderedChild('l533749473-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        <?php endif; ?>
                        
                        <button class="flex items-center align-middle focus:outline-none" @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
                            
                            <p class="hidden mx-4 md:block"><?php echo e(Auth::user()->name); ?></p>

                            
                            <img class="object-cover w-8 h-8 ml-2 <?php echo e(isRTL() ? 'ml-2':'mr-2'); ?> rounded-full" src="<?php echo e(Auth::user()->photo); ?>" alt="" aria-hidden="true" />


                        </button>
                    </div>
                    <template x-if="isProfileMenuOpen">
                        <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu" class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 " aria-label="submenu">
                            <li class="flex">
                                <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="<?php echo e(route('profile')); ?>">
                                    <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                    <span><?php echo e(__('Profile')); ?></span>
                                </a>
                            </li>

                            <li class="flex cursor-pointer logout" @click="logout">
                                <div class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200">
                                    <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                    <span><?php echo e(__('Log out')); ?></span>
                                </div>
                            </li>
                        </ul>
                    </template>
                </li>
            </ul>
        </div>
    </header>

</div>
<?php /**PATH D:\xampp8.1\htdocs\zuma backend\resources\views/livewire/header/profile.blade.php ENDPATH**/ ?>