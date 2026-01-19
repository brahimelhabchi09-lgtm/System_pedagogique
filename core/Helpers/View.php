<?php

namespace Core\Helpers;

use eftec\bladeone\BladeOne;

class View
{
    private static ?BladeOne $blade = null;

    public static function render(string $template, array $data = []): void
    {
        if (self::$blade === null) {

            $views = __DIR__ . '/../../views';
            $cache = __DIR__ . '/../../cache';

            self::$blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);
        }

        echo self::$blade->run($template, $data);
    }
}