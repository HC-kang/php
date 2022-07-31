<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit71b2442bfcb6237d6c5eef77d6e0ce45
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

        spl_autoload_register(array('ComposerAutoloaderInit71b2442bfcb6237d6c5eef77d6e0ce45', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit71b2442bfcb6237d6c5eef77d6e0ce45', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit71b2442bfcb6237d6c5eef77d6e0ce45::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}