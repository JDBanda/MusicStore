<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerG0xhwdj\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerG0xhwdj/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerG0xhwdj.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerG0xhwdj\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerG0xhwdj\appProdProjectContainer([
    'container.build_hash' => 'G0xhwdj',
    'container.build_id' => '8e49948a',
    'container.build_time' => 1604286163,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerG0xhwdj');