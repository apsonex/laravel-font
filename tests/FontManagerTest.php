<?php

use Apsonex\Font\Font;
use Apsonex\Font\FontDTO;
use Apsonex\Font\FontResponse;
use Apsonex\LaravelFont\LaravelFont;

beforeEach(function () {
    $this->manager = new LaravelFont(new Font());
});

test('it can list fonts', function () {
    $response = $this->manager->list(limit: 10);

    expect($response)->toBeInstanceOf(FontResponse::class)
        ->and(count($response->fonts))->toBeLessThanOrEqual(10);
});

test('it can search fonts by keyword', function () {
    $response = $this->manager->search('abo');

    expect($response)->toBeInstanceOf(FontResponse::class)
        ->and($response->fonts)->not->toBeEmpty();
});

test('it can find font by key', function () {
    $font = $this->manager->findByKey('abel');

    expect($font)->toBeInstanceOf(FontDTO::class)
        ->and($font->key)->toBe('abel');
});

test('it can find fonts by family', function () {
    $response = $this->manager->findByFamily('Abel');

    expect($response)->toBeInstanceOf(FontResponse::class)
        ->and($response->fonts)->not->toBeEmpty();
});

test('it can find fonts by type', function () {
    $response = $this->manager->findByType('sans-serif');

    expect($response)->toBeInstanceOf(FontResponse::class)
        ->and($response->fonts)->not->toBeEmpty();
});

test('it can find fonts by keys', function () {
    $response = $this->manager->findByKeys(['abel'], 10);

    expect($response)->toBeInstanceOf(FontResponse::class)
        ->and($response->fonts)->not->toBeEmpty();
});

test('it can find fonts by families', function () {
    $response = $this->manager->findByFamilies(['Abel', 'Aboreto'], 10);

    expect($response)->toBeInstanceOf(FontResponse::class)
        ->and($response->fonts)->not->toBeEmpty();
});
