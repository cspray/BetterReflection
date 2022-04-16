<?php

declare(strict_types=1);

// TODO this is here to get tests running on my local machine. Could probably base this off of a PHP version being run
if (false) {
    require __DIR__ . '/../stubs/UnitEnum.php';
    require __DIR__ . '/../stubs/BackedEnum.php';

    require __DIR__ . '/../stubs/ReflectionEnum.php';
    require __DIR__ . '/../stubs/ReflectionEnumUnitCase.php';
    require __DIR__ . '/../stubs/ReflectionEnumBackedCase.php';
    require __DIR__ . '/../stubs/ReflectionIntersectionType.php';
}

$loader = require __DIR__ . '/../vendor/autoload.php';
