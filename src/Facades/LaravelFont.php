<?php

namespace Apsonex\LaravelFont\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Laravel Font Facade
 *
 * Provides a static interface for font operations through the Laravel Font Manager.
 * This facade allows you to interact with the Bunny Fonts API to search, list,
 * and retrieve font information.
 *
 * @method static \Apsonex\Font\FontResponse list(int $limit = 20, int $page = 1) Get a paginated list of fonts
 * @method static \Apsonex\Font\FontResponse search(string $keyword, int $limit = 20, int $page = 1) Search fonts by keyword
 * @method static \Apsonex\Font\FontDTO|null findByKey(string $key) Find a font by its unique key
 * @method static \Apsonex\Font\FontResponse findByKeys(array $keys, int $limit = 20) Find fonts by multiple keys
 * @method static \Apsonex\Font\FontResponse findByFamily(string $family, int $limit = 20) Find fonts by family name
 * @method static \Apsonex\Font\FontResponse findByFamilies(array $families, int $limit = 20) Find fonts by multiple family names
 * @method static \Apsonex\Font\FontResponse findByType(string $type, int $limit = -1) Find fonts by type
 *
 * @see \Apsonex\LaravelFont\LaravelFontManager
 */
class LaravelFont extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Apsonex\LaravelFont\LaravelFont::class;
    }
}
