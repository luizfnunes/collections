<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit897931dfcb3e477b36ad1d09a14112db
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Luizfnunes\\Collections\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Luizfnunes\\Collections\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit897931dfcb3e477b36ad1d09a14112db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit897931dfcb3e477b36ad1d09a14112db::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit897931dfcb3e477b36ad1d09a14112db::$classMap;

        }, null, ClassLoader::class);
    }
}
