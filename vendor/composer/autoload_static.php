<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite334b8a90310dfd0ec8e96d72ec3e4bf
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Guede\\ChequesApi\\' => 17,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Guede\\ChequesApi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite334b8a90310dfd0ec8e96d72ec3e4bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite334b8a90310dfd0ec8e96d72ec3e4bf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite334b8a90310dfd0ec8e96d72ec3e4bf::$classMap;

        }, null, ClassLoader::class);
    }
}
