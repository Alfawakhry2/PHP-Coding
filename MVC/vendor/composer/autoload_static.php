<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit02fc7703a6b4e22c832f608cd7f74071
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alfaw\\Mvc\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alfaw\\Mvc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit02fc7703a6b4e22c832f608cd7f74071::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit02fc7703a6b4e22c832f608cd7f74071::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit02fc7703a6b4e22c832f608cd7f74071::$classMap;

        }, null, ClassLoader::class);
    }
}
