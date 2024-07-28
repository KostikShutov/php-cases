<?php

declare(strict_types=1);

class Detector
{
    public function getUserAgent(): string
    {
        if (PHP_SAPI === 'cli') {
            throw new LogicException('No user agent, it is cli?');
        }

        return $_SERVER['HTTP_USER_AGENT'];
    }
}
