<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit002b39bb436a0d6c4eb4773750f18c38
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'j' => 
        array (
            'jlawrence\\eos\\' => 14,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'J' => 
        array (
            'Jenssegers\\Date\\' => 16,
        ),
        'I' => 
        array (
            'Intervention\\Image\\' => 19,
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Contracts\\' => 21,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 26,
        ),
        'C' => 
        array (
            'ConsoleTVs\\Support\\' => 19,
            'ConsoleTVs\\Charts\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'jlawrence\\eos\\' => 
        array (
            0 => __DIR__ . '/..' . '/jlawrence/eos/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Jenssegers\\Date\\' => 
        array (
            0 => __DIR__ . '/..' . '/jenssegers/date/src',
        ),
        'Intervention\\Image\\' => 
        array (
            0 => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'Doctrine\\Common\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Common/Inflector',
        ),
        'ConsoleTVs\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/consoletvs/support',
        ),
        'ConsoleTVs\\Charts\\' => 
        array (
            0 => __DIR__ . '/..' . '/consoletvs/charts/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/nesbot/carbon/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit002b39bb436a0d6c4eb4773750f18c38::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit002b39bb436a0d6c4eb4773750f18c38::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit002b39bb436a0d6c4eb4773750f18c38::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
