<?php

namespace JamesMills\LaravelDatadog;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class DataDogClient
{
    public function __construct()
    {
        $this->client = new Client;
    }

    public function increment($metric)
    {
        $this->client->post(config('datadog.host') . 'series?api_key=' . config('datadog.api_key'),
            [
                RequestOptions::JSON => [
                    'series' => [[
                        'metric' => $metric,
                        'points' => [
                            array(time(), 1)
                        ],
                        'type' => 'count',
                        'host' => 'test.example.com',
                        'tags' => ['environment:test'],
                    ]]
                ]
            ]);
    }
}
