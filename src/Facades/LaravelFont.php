<?php

namespace Apsonex\LaravelFont\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Apsonex\LaravelFont\LaravelFont
 */
class LaravelFont extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Apsonex\LaravelFont\LaravelFont::class;
    }
}
