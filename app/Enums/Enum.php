<?php

namespace App\Enums;

class Enum implements EnumContract
{
    public static function all() : array
    {
        return array_values((new \ReflectionClass(get_called_class()))->getConstants());
    }

    public static function viewMapping() : array
    {
        return (new \ReflectionClass(get_called_class()))->getConstants();
    }
}
