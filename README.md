# Laravel DataDog

[![Packagist](https://img.shields.io/packagist/v/jamesmills/laravel-datadog.svg?style=for-the-badge)](https://packagist.org/packages/jamesmills/laravel-datadog)
![Packagist](https://img.shields.io/packagist/dt/jamesmills/laravel-datadog.svg?style=for-the-badge)
[![Packagist](https://img.shields.io/packagist/l/jamesmills/laravel-datadog.svg?style=for-the-badge)]()

A simple package to use DataDog Series Metric using their API via TCP 

## Why?

Because some people cannot install the DataDog Agent or StatsD. So we have to use DataDog API to send data. Using the API losses the advantage of using UDP (unblocking) calls. This package gives you a nice way to send metric information and also make sure the jobs are queued.