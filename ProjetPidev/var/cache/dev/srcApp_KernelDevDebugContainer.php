<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container59AvvJS\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container59AvvJS/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container59AvvJS.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container59AvvJS\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container59AvvJS\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '59AvvJS',
    'container.build_id' => '059a46ae',
    'container.build_time' => 1617068252,
], __DIR__.\DIRECTORY_SEPARATOR.'Container59AvvJS');
