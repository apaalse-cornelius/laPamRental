<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita657a4bc850a76324018cab71fe6586c
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita657a4bc850a76324018cab71fe6586c::$classMap;

        }, null, ClassLoader::class);
    }
}