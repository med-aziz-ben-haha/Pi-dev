<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQIC7hoa\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQIC7hoa/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQIC7hoa.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQIC7hoa\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerQIC7hoa\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'QIC7hoa',
    'container.build_id' => '9374ca1a',
    'container.build_time' => 1616619723,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQIC7hoa');
