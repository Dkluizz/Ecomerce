<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc6994b07f72d1a26ffbaf67ffa9c08c5
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

        spl_autoload_register(array('ComposerAutoloaderInitc6994b07f72d1a26ffbaf67ffa9c08c5', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc6994b07f72d1a26ffbaf67ffa9c08c5', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc6994b07f72d1a26ffbaf67ffa9c08c5::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitc6994b07f72d1a26ffbaf67ffa9c08c5::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequirec6994b07f72d1a26ffbaf67ffa9c08c5($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequirec6994b07f72d1a26ffbaf67ffa9c08c5($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
