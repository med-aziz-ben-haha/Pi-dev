<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerY8fW5eO\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerY8fW5eO/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerY8fW5eO.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerY8fW5eO\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerY8fW5eO\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Y8fW5eO',
    'container.build_id' => 'c471f998',
    'container.build_time' => 1615554375,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerY8fW5eO');
