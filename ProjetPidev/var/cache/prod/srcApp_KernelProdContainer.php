<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTzxLOwp\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTzxLOwp/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerTzxLOwp.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerTzxLOwp\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerTzxLOwp\srcApp_KernelProdContainer([
    'container.build_hash' => 'TzxLOwp',
    'container.build_id' => '232d8d30',
    'container.build_time' => 1614848688,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTzxLOwp');
