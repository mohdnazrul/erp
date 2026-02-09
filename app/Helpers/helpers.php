<?php

if (!function_exists('getBodyClass')) {
    function getBodyClass($name)
    {
        $BODYCLASS = App\Enums\BodyClass::BODYCLASS;

        return $BODYCLASS[$name] ?? "";
    }
}
