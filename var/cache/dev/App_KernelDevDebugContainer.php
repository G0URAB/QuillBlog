<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKKt8giD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKKt8giD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKKt8giD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKKt8giD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKKt8giD\App_KernelDevDebugContainer([
    'container.build_hash' => 'KKt8giD',
    'container.build_id' => '0ba336a3',
    'container.build_time' => 1584051932,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKKt8giD');
