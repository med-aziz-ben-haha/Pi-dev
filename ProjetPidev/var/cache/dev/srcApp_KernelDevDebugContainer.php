<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBuXR95Y\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBuXR95Y/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBuXR95Y.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBuXR95Y\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBuXR95Y\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'BuXR95Y',
    'container.build_id' => '3bfdfc02',
    'container.build_time' => 1616030082,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBuXR95Y');
