<?php

declare(strict_types=1);

spl_autoload_register(static function (string $class): void {
    require_once __DIR__ . '/' . $class . '.php';
});

try {
    echo (new Detector())->getUserAgent();
} catch (Exception $e) {
    echo $e->getMessage();
}
