<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite334b8a90310dfd0ec8e96d72ec3e4bf
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInite334b8a90310dfd0ec8e96d72ec3e4bf', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite334b8a90310dfd0ec8e96d72ec3e4bf', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite334b8a90310dfd0ec8e96d72ec3e4bf::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInite334b8a90310dfd0ec8e96d72ec3e4bf::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequiree334b8a90310dfd0ec8e96d72ec3e4bf($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequiree334b8a90310dfd0ec8e96d72ec3e4bf($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
