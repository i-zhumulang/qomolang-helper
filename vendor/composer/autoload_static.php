<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit71de02544e7e755108cb45b07bd85d3e
{
    public static $prefixLengthsPsr4 = array (
        'Q' => 
        array (
            'Qomolang\\Helper\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Qomolang\\Helper\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit71de02544e7e755108cb45b07bd85d3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit71de02544e7e755108cb45b07bd85d3e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit71de02544e7e755108cb45b07bd85d3e::$classMap;

        }, null, ClassLoader::class);
    }
}
