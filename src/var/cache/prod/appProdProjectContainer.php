<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEfwdznx\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEfwdznx/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerEfwdznx.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerEfwdznx\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerEfwdznx\appProdProjectContainer([
    'container.build_hash' => 'Efwdznx',
    'container.build_id' => 'b149042c',
    'container.build_time' => 1665161546,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEfwdznx');