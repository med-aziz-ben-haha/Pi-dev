<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDFsWyYS\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDFsWyYS/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDFsWyYS.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDFsWyYS\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerDFsWyYS\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'DFsWyYS',
    'container.build_id' => '32fe4104',
    'container.build_time' => 1615165694,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDFsWyYS');
