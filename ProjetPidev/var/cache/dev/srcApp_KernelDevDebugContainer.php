<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX0aiIUK\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX0aiIUK/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerX0aiIUK.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerX0aiIUK\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerX0aiIUK\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'X0aiIUK',
    'container.build_id' => '6aaef98c',
    'container.build_time' => 1616281612,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX0aiIUK');
