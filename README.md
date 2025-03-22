# Flexible vourcher management for Laravel application

[![Latest Version on Packagist](https://img.shields.io/packagist/v/soap/laravel-vouchers.svg?style=flat-square)](https://packagist.org/packages/soap/laravel-vouchers)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/soap/laravel-vouchers/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/soap/laravel-vouchers/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/soap/laravel-vouchers/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/soap/laravel-vouchers/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/soap/laravel-vouchers.svg?style=flat-square)](https://packagist.org/packages/soap/laravel-vouchers)

Flexible vouchers usage system for Laravel application. Any recommendations are welcome.

## Features
- Associate one voucher with one or more items
- Flexible redeemer models: vouchers can be redeemed by any model. User, Admin, Guest models.
- Flexible voucher models: voucher can be associated with any model. Product, Variant, Ticket, whatever else.
- Use vouchers once or multiple times
- Limit access: can define model instances that are allowed or excluded from redeeming a Voucher
- Multiple limit scheme; exhaust redeems per instance, per user or per product
## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-vouchers.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-vouchers)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require soap/laravel-vouchers
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-vouchers-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-vouchers-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-vouchers-views"
```

## Usage

```php
$vouchers = new Soap\Vouchers();
echo $vouchers->echoPhrase('Hello, Soap!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Prasit Gebsaap](https://github.com/soap)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
