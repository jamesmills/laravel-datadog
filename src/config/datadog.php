<?php

return [

    /*
    |--------------------------------------------------------------------------
    | DataDog API Settings
    |--------------------------------------------------------------------------
    |
    |
    */

    'host' => env('DATADOG_HOST', 'https://api.datadoghq.com/api/v1/'),
    'api_key' => env('DATADOG_KEY', null),
];
