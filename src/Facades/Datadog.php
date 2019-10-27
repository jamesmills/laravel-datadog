<?php

namespace JamesMills\LaravelDatadog\Facades;

use Illuminate\Support\Facades\Facade;

class Datadog extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'datadog';
    }
}
