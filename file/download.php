<?php

declare(strict_types=1);

$file = $_GET['file'] ?? null;

if (empty($file)) {
    die('Файл не указан');
}

$path = __DIR__ . $file;

if (!file_exists($path)) {
    die('Файл не найден');
}

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($path) . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($path));
readfile($path);
