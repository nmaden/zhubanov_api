<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb2864dfc797658e5b8db2ff7b18aace
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tuupola\\Middleware\\' => 19,
            'Tuupola\\Http\\Factory\\' => 21,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Slim\\' => 5,
        ),
        'R' => 
        array (
            'Respect\\Validation\\' => 19,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
            'Models\\' => 7,
            'Middleware\\' => 11,
        ),
        'L' => 
        array (
            'Lib\\' => 4,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
            'FastRoute\\' => 10,
        ),
        'D' => 
        array (
            'DavidePastore\\Slim\\Validation\\' => 30,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tuupola\\Middleware\\' => 
        array (
            0 => __DIR__ . '/..' . '/tuupola/callable-handler/src',
            1 => __DIR__ . '/..' . '/tuupola/slim-jwt-auth/src',
        ),
        'Tuupola\\Http\\Factory\\' => 
        array (
            0 => __DIR__ . '/..' . '/tuupola/http-factory/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Respect\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/respect/validation/library',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-server-handler/src',
            1 => __DIR__ . '/..' . '/psr/http-server-middleware/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'Middleware\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/middleware',
        ),
        'Lib\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/lib',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'DavidePastore\\Slim\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/davidepastore/slim-validation/src',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteb2864dfc797658e5b8db2ff7b18aace::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteb2864dfc797658e5b8db2ff7b18aace::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticIniteb2864dfc797658e5b8db2ff7b18aace::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
