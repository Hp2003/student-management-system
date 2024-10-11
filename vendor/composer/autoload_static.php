<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7295833cb6a768554e7c7ff6096910f9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pc021002\\Mvc2\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pc021002\\Mvc2\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7295833cb6a768554e7c7ff6096910f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7295833cb6a768554e7c7ff6096910f9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7295833cb6a768554e7c7ff6096910f9::$classMap;

        }, null, ClassLoader::class);
    }
}
