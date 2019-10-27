# Laravel DataDog

[![Packagist](https://img.shields.io/packagist/v/jamesmills/laravel-datadog.svg?style=for-the-badge)](https://packagist.org/packages/jamesmills/laravel-datadog)
![Packagist](https://img.shields.io/packagist/dt/jamesmills/laravel-datadog.svg?style=for-the-badge)
[![Packagist](https://img.shields.io/packagist/l/jamesmills/laravel-datadog.svg?style=for-the-badge)]()

A simple package to use DataDog Series Metric using their API via TCP 

## Why?

Because some people cannot install the DataDog Agent or StatsD. So we have to use DataDog API to send data. Using the API losses the advantage of using UDP (unblocking) calls. This package gives you a nice way to send metric information and also make sure the jobs are queued.

## Installation

Pull in the package using Composer

```
composer require jamesmills/laravel-datadog
```

Set your DataDog API key in your `.env` file using the key `DATADOG_KEY` (or publish the config and use that).

 ## How to use

### Increment a Metric

```php
\DataDog::increment('app.pageview');
```

## Custom Configuration

Publishing the config file is optional. 

You would only want to publish the custom config file if you wanted to set the DataDog API key differently then using the .env settings.

```php
php artisan vendor:publish --provider="JamesMills\LaravelDataDog\LaravelDataDogServiceProvider" --tag=config
```

