<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerY3dFPdG\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerY3dFPdG/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerY3dFPdG.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerY3dFPdG\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerY3dFPdG\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Y3dFPdG',
    'container.build_id' => '97919887',
    'container.build_time' => 1590403393,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerY3dFPdG');
