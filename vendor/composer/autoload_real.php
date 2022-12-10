<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbd933a0ba2d59dc5764054953b9f2c97
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

        spl_autoload_register(array('ComposerAutoloaderInitbd933a0ba2d59dc5764054953b9f2c97', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbd933a0ba2d59dc5764054953b9f2c97', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbd933a0ba2d59dc5764054953b9f2c97::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
