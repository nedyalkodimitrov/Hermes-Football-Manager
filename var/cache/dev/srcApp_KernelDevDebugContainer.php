<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerI7CAAnp\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerI7CAAnp/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerI7CAAnp.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerI7CAAnp\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerI7CAAnp\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'I7CAAnp',
    'container.build_id' => 'a5029332',
    'container.build_time' => 1592997902,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerI7CAAnp');
