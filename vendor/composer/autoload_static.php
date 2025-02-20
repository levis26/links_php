<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit89e8ab349ace1e3c8dd42f9404ef23dc
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DatabaseController' => __DIR__ . '/../..' . '/src/controller/DatabaseController.php',
        'LinkController' => __DIR__ . '/../..' . '/src/controller/LinkController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit89e8ab349ace1e3c8dd42f9404ef23dc::$classMap;

        }, null, ClassLoader::class);
    }
}
