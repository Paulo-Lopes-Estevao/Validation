<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0fddd2c660b711fcdb521d188e4cffc
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Build\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Build\\' => 
        array (
            0 => __DIR__ . '/../..' . '/resolveTo',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita0fddd2c660b711fcdb521d188e4cffc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0fddd2c660b711fcdb521d188e4cffc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita0fddd2c660b711fcdb521d188e4cffc::$classMap;

        }, null, ClassLoader::class);
    }
}
