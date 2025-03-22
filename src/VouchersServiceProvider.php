<?php

namespace Soap\Vouchers;

use Soap\Vouchers\Commands\VouchersCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class VouchersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-vouchers')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_vouchers_table')
            ->hasCommand(VouchersCommand::class);
    }
}
