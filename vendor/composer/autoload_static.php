<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d668a67ff7c9b162cb50cff4edde859
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PDOOCI\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PDOOCI\\' => 
        array (
            0 => __DIR__ . '/..' . '/taq/pdooci/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d668a67ff7c9b162cb50cff4edde859::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d668a67ff7c9b162cb50cff4edde859::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
