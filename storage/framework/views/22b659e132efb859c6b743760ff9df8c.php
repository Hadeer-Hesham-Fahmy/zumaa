<?php

if (empty($rawRoute ?? '')) {
    $currentRoute = Route::currentRouteName();
    $isActive = $currentRoute == $route;
} else {
    $currentRoute = url()->full();
    $isActive = $currentRoute == $rawRoute;
}



?>
<li class="relative px-6 py-3">
    <?php if($isActive): ?>
        <span class="absolute inset-y-0 left-0 w-1 bg-white rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
    <?php endif; ?>

    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-200 <?php echo e($isActive ? 'text-white' : 'text-gray-200'); ?>"
        href="<?php echo e($rawRoute ?? (route($route) ?? '#')); ?>" 
        <?php if($ex ?? false): ?>
            target="_blank"
        <?php endif; ?> >
        <?php echo e($slot ?? ''); ?>

        <span class="<?php echo e(isRTL() ? 'mr-4':'ml-4'); ?>"><?php echo e($title); ?></span>
    </a>


</li>
<?php /**PATH /Users/ambrosetemidayobako/Desktop/Dev/web/fuodz-admin/resources/views/components/menu-item.blade.php ENDPATH**/ ?>