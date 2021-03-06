<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitedd736fe75722e3795b7ba5d6467fc0e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pentiminax\\DuplicatePost\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pentiminax\\DuplicatePost\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitedd736fe75722e3795b7ba5d6467fc0e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitedd736fe75722e3795b7ba5d6467fc0e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitedd736fe75722e3795b7ba5d6467fc0e::$classMap;

        }, null, ClassLoader::class);
    }
}
