<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a821e9f9b94f503c8bc4a469e1c6901
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Observers\\' => 10,
        ),
        'I' => 
        array (
            'Inventory\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Observers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Observers',
        ),
        'Inventory\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Inventory',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a821e9f9b94f503c8bc4a469e1c6901::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a821e9f9b94f503c8bc4a469e1c6901::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6a821e9f9b94f503c8bc4a469e1c6901::$classMap;

        }, null, ClassLoader::class);
    }
}
