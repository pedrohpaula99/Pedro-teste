<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdcf1ad0ff08f5546e4dcc57dfd4c63de
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

        spl_autoload_register(array('ComposerAutoloaderInitdcf1ad0ff08f5546e4dcc57dfd4c63de', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdcf1ad0ff08f5546e4dcc57dfd4c63de', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdcf1ad0ff08f5546e4dcc57dfd4c63de::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
