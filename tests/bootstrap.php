<?php
/**
 * This file is part of the eZ Social Login package.
 */
// Skip autoloading if already done by phpunit alias (including from meta repo if this is vendor)
if (defined('PHPUNIT_COMPOSER_INSTALL')) {
    return;
}
$file = __DIR__ . '/../vendor/autoload.php';
if (!file_exists($file)) {
    throw new RuntimeException('Install dependencies using composer to run the test suite.');
}
$autoload = require_once $file;