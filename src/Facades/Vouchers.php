<?php

namespace Soap\Vouchers\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soap\Vouchers\Vouchers
 */
class Vouchers extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Soap\Vouchers\Vouchers::class;
    }
}
