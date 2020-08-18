<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit65b6424071433572f71fc34c3e032d83
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
        '538ca81a9a966a6716601ecf48f4eaef' => __DIR__ . '/..' . '/opis/closure/functions.php',
        'b33e3d135e5d9e47d845c576147bda89' => __DIR__ . '/..' . '/php-di/php-di/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WeDevelopCoffee\\wPower\\' => 23,
            'WeDevelopCoffee\\OpenProvider_Api\\' => 33,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 25,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
            'PhpDocReader\\' => 13,
        ),
        'O' => 
        array (
            'Opis\\Closure\\' => 13,
            'OpenProvider\\WhmcsDomainAddon\\' => 30,
        ),
        'I' => 
        array (
            'Invoker\\' => 8,
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Filesystem\\' => 22,
            'Illuminate\\Contracts\\' => 21,
        ),
        'D' => 
        array (
            'DI\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WeDevelopCoffee\\wPower\\' => 
        array (
            0 => __DIR__ . '/..' . '/wedevelopcoffee/wpower/src',
        ),
        'WeDevelopCoffee\\OpenProvider_Api\\' => 
        array (
            0 => __DIR__ . '/..' . '/wedevelopcoffee/openprovider_api/src',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PhpDocReader\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader',
        ),
        'Opis\\Closure\\' => 
        array (
            0 => __DIR__ . '/..' . '/opis/closure/src',
        ),
        'OpenProvider\\WhmcsDomainAddon\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Invoker\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/invoker/src',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/filesystem',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'DI\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/php-di/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit65b6424071433572f71fc34c3e032d83::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit65b6424071433572f71fc34c3e032d83::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit65b6424071433572f71fc34c3e032d83::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
