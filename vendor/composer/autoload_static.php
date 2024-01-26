<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1b35bb425da2e6e3dcfd48b51c83a0cc
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Colorfy\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Colorfy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1b35bb425da2e6e3dcfd48b51c83a0cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1b35bb425da2e6e3dcfd48b51c83a0cc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1b35bb425da2e6e3dcfd48b51c83a0cc::$classMap;

        }, null, ClassLoader::class);
    }
}