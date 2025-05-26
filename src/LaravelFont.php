<?php

namespace Apsonex\LaravelFont;

use Apsonex\Font\Font;
use Apsonex\Font\FontDTO;
use Apsonex\Font\FontResponse;

class LaravelFont
{
    protected Font $font;

    public function __construct(Font $font)
    {
        $this->font = $font->bunny();
    }

    public function list(int $limit = 20, int $page = 1): FontResponse
    {
        return $this->font->list($limit, $page);
    }

    public function search(string $keyword, int $limit = 20, int $page = 1): FontResponse
    {
        return $this->font->search($keyword, $limit, $page);
    }

    public function findByKey(string $key): ?FontDTO
    {
        return $this->font->findByKey($key);
    }

    public function findByKeys(array $keys, int $limit = 20): FontResponse
    {
        return $this->font->findByKeys($keys, $limit);
    }

    public function findByFamily(string $family, int $limit = 20): FontResponse
    {
        return $this->font->findByFamily($family, $limit);
    }

    public function findByFamilies(array $families, int $limit = 20): FontResponse
    {
        return $this->font->findByFamilies($families, $limit);
    }

    public function findByType(string $type, int $limit = -1): FontResponse
    {
        return $this->font->findByType($type, $limit);
    }
}
