<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a2e8f2d1950b4f6562c280e15c2bfb8
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1a2e8f2d1950b4f6562c280e15c2bfb8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1a2e8f2d1950b4f6562c280e15c2bfb8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1a2e8f2d1950b4f6562c280e15c2bfb8::$classMap;

        }, null, ClassLoader::class);
    }
}
