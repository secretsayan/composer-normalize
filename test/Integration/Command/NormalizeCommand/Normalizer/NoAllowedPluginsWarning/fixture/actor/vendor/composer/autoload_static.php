<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6d75c4d1158e584e2a22aeae0dea10f1
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JsonSchema\\' => 11,
        ),
        'E' => 
        array (
            'Ergebnis\\Json\\SchemaValidator\\' => 30,
            'Ergebnis\\Json\\Printer\\' => 22,
            'Ergebnis\\Json\\Normalizer\\' => 25,
            'Ergebnis\\Composer\\Normalize\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JsonSchema\\' => 
        array (
            0 => __DIR__ . '/..' . '/justinrainbow/json-schema/src/JsonSchema',
        ),
        'Ergebnis\\Json\\SchemaValidator\\' => 
        array (
            0 => __DIR__ . '/..' . '/ergebnis/json-schema-validator/src',
        ),
        'Ergebnis\\Json\\Printer\\' => 
        array (
            0 => __DIR__ . '/..' . '/ergebnis/json-printer/src',
        ),
        'Ergebnis\\Json\\Normalizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/ergebnis/json-normalizer/src',
        ),
        'Ergebnis\\Composer\\Normalize\\' => 
        array (
            0 => __DIR__ . '/..' . '/ergebnis/composer-normalize/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Localheinz\\Diff\\Chunk' => __DIR__ . '/..' . '/localheinz/diff/src/Chunk.php',
        'Localheinz\\Diff\\ConfigurationException' => __DIR__ . '/..' . '/localheinz/diff/src/Exception/ConfigurationException.php',
        'Localheinz\\Diff\\Diff' => __DIR__ . '/..' . '/localheinz/diff/src/Diff.php',
        'Localheinz\\Diff\\Differ' => __DIR__ . '/..' . '/localheinz/diff/src/Differ.php',
        'Localheinz\\Diff\\Exception' => __DIR__ . '/..' . '/localheinz/diff/src/Exception/Exception.php',
        'Localheinz\\Diff\\InvalidArgumentException' => __DIR__ . '/..' . '/localheinz/diff/src/Exception/InvalidArgumentException.php',
        'Localheinz\\Diff\\Line' => __DIR__ . '/..' . '/localheinz/diff/src/Line.php',
        'Localheinz\\Diff\\LongestCommonSubsequenceCalculator' => __DIR__ . '/..' . '/localheinz/diff/src/LongestCommonSubsequenceCalculator.php',
        'Localheinz\\Diff\\MemoryEfficientLongestCommonSubsequenceCalculator' => __DIR__ . '/..' . '/localheinz/diff/src/MemoryEfficientLongestCommonSubsequenceCalculator.php',
        'Localheinz\\Diff\\Output\\AbstractChunkOutputBuilder' => __DIR__ . '/..' . '/localheinz/diff/src/Output/AbstractChunkOutputBuilder.php',
        'Localheinz\\Diff\\Output\\DiffOnlyOutputBuilder' => __DIR__ . '/..' . '/localheinz/diff/src/Output/DiffOnlyOutputBuilder.php',
        'Localheinz\\Diff\\Output\\DiffOutputBuilderInterface' => __DIR__ . '/..' . '/localheinz/diff/src/Output/DiffOutputBuilderInterface.php',
        'Localheinz\\Diff\\Output\\StrictUnifiedDiffOutputBuilder' => __DIR__ . '/..' . '/localheinz/diff/src/Output/StrictUnifiedDiffOutputBuilder.php',
        'Localheinz\\Diff\\Output\\UnifiedDiffOutputBuilder' => __DIR__ . '/..' . '/localheinz/diff/src/Output/UnifiedDiffOutputBuilder.php',
        'Localheinz\\Diff\\Parser' => __DIR__ . '/..' . '/localheinz/diff/src/Parser.php',
        'Localheinz\\Diff\\TimeEfficientLongestCommonSubsequenceCalculator' => __DIR__ . '/..' . '/localheinz/diff/src/TimeEfficientLongestCommonSubsequenceCalculator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6d75c4d1158e584e2a22aeae0dea10f1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6d75c4d1158e584e2a22aeae0dea10f1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6d75c4d1158e584e2a22aeae0dea10f1::$classMap;

        }, null, ClassLoader::class);
    }
}
