<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbde3c27e5babae288fcdd54fc710979d
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbde3c27e5babae288fcdd54fc710979d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbde3c27e5babae288fcdd54fc710979d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbde3c27e5babae288fcdd54fc710979d::$classMap;

        }, null, ClassLoader::class);
    }
}