<?php

namespace JamesMills\LaravelDataDog\Facades;

use Illuminate\Support\Facades\Facade;

class DataDog extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'datadog';
    }
}
