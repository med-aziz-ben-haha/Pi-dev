<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSggXHbc\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSggXHbc/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSggXHbc.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSggXHbc\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerSggXHbc\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'SggXHbc',
    'container.build_id' => '165f2cce',
    'container.build_time' => 1617314614,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSggXHbc');
