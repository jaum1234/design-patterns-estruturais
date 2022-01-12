<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09cc2c54fe5f9fb194796aca6eb57cec
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\DesignPattern\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\DesignPattern\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit09cc2c54fe5f9fb194796aca6eb57cec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09cc2c54fe5f9fb194796aca6eb57cec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit09cc2c54fe5f9fb194796aca6eb57cec::$classMap;

        }, null, ClassLoader::class);
    }
}