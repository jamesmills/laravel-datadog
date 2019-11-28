<?php

namespace JamesMills\LaravelDataDog;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class DataDogClient
{
    public function __construct()
    {
        $this->client = new Client;
    }

    public function increment($metric, $tags, $host)
    {
        $series = [
            'metric' => $metric,
            'points' => [
                array(time(), 1),
            ],
            'type' => 'count',
        ];

        if (!empty($tags)) {
            $series['tags'] = $tags;
        }

        if (!is_null($host)) {
            $series['host'] = $host;
        }

        return retry(3, function () use ($series) {
            $this->client->post(
                config('datadog.host') . 'series?api_key=' . config('datadog.api_key'),
                [
                    RequestOptions::JSON => [
                        'series' => [$series],
                    ],
                ]
            );
        }, 500);

    }
}
