<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdaf53b10cbde67a11e54cbf3a81c05d7
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdaf53b10cbde67a11e54cbf3a81c05d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdaf53b10cbde67a11e54cbf3a81c05d7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
