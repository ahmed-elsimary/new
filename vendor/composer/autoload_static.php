<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0dc0638550282f10050836a7f64b7ad8
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Ergasti\\Smerece\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ergasti\\Smerece\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0dc0638550282f10050836a7f64b7ad8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0dc0638550282f10050836a7f64b7ad8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0dc0638550282f10050836a7f64b7ad8::$classMap;

        }, null, ClassLoader::class);
    }
}