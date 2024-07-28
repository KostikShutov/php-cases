<?php

declare(strict_types=1);

$name = '../phar-run/detector.phar';

if (file_exists($name)) {
    unlink($name);
}

$phar = new Phar($name);
$phar->addFile('index.php');
$phar->addFile('Detector.php');
$phar->setDefaultStub('index.php', 'index.php');
