<?php

namespace App\Services\Enum;

use Illuminate\Support\Facades\Facade;

class EnumFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Enum';
    }
}
