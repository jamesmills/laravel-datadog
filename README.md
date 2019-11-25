# Laravel DataDog

[![Packagist](https://img.shields.io/packagist/v/jamesmills/laravel-datadog.svg?style=for-the-badge)](https://packagist.org/packages/jamesmills/laravel-datadog)
![Packagist](https://img.shields.io/packagist/dt/jamesmills/laravel-datadog.svg?style=for-the-badge)
[![Packagist](https://img.shields.io/packagist/l/jamesmills/laravel-datadog.svg?style=for-the-badge)]()

A simple package to use DataDog Series Metric using their API via TCP 

## Why?

Because some people cannot install the DataDog Agent or StatsD. So we have to use DataDog API to send data. Using the API losses the advantage of using UDP (unblocking) calls. This package gives you a nice way to send metric information and also make sure the jobs are queued.

## Other packages

This package should only be used if you also find yourslef in the unique situation where you cannot use the DataDog Agent. Make sure you investigate the below packages first.

- https://github.com/DataDog/php-datadogstatsd
- https://github.com/chaseconey/laravel-datadog-helper

## Installation

Pull in the package using Composer 

```
composer require jamesmills/laravel-datadog
```

Publish the config file 

```php
php artisan vendor:publish --provider="JamesMills\LaravelDataDog\LaravelDataDogServiceProvider" --tag=config
```

Set your DataDog API key in your `.env` file using the key `DATADOG_KEY`.

 ## How to use

### Increment a Metric

```php
\DataDog::increment('app.pageview');
```

### Increment a Metric with tagging and Host

A powerful feature of DataDog is the ability to tag things.

```php
\DataDog::increment('app.pageview', ['my:tag:one', 'my:tag:two']);
```

You can also send a custom host if you require.
```php
\DataDog::increment('app.pageview', ['my:tag:one', 'my:tag:two'], 'my.host.com');
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email james@jamesmills.co.uk instead of using the issue tracker.

## Credits

- [James Mills](https://github.com/jamesmills)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.


