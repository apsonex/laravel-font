# Apsonex LaravelFont

[![Latest Version](https://img.shields.io/packagist/v/apsonex/laravelfont.svg?style=flat-square)](https://packagist.org/packages/apsonex/laravelfont)
[![License](https://img.shields.io/packagist/l/apsonex/laravelfont.svg?style=flat-square)](https://packagist.org/packages/apsonex/laravelfont)

`apsonex/laravelfont` is a Laravel wrapper around the core [`apsonex/font`](https://github.com/apsonex/font) package, allowing you to easily manage fonts from supported providers like [Bunny Fonts](https://fonts.bunny.net/).

---

## ✨ Features

* List, search, and retrieve fonts by key, family, or type.
* Support for Bunny Fonts.
* Laravel auto-discovery with service provider and facade.
* Clean, chainable API.
* Ready for testing using Pest PHP.

---

## 🚀 Installation

```bash
composer require apsonex/laravelfont
```

---

## 📆 Usage

### Resolving the Font Manager

```php
use Apsonex\LaravelFont\Facades\LaravelFont;

$manager = LaravelFont::bunny();
```

Or via service container:

```php
$manager = app(\Apsonex\LaravelFont\LaravelFontManager::class)->bunny();
```

---

## 📚 API Methods

### Set Provider

```php
$manager->bunny();
```

### List Fonts

```php
$manager->list(limit: 20, page: 1);
```

### Search Fonts

```php
$manager->search(keyword: 'abo', limit: 20, page: 1);
```

### Find by Key

```php
$manager->findByKey('abel');
```

### Find by Keys

```php
$manager->findByKeys(['abel', 'aboreto'], limit: 10);
```

### Find by Family

```php
$manager->findByFamily('Abel', limit: 10);
```

### Find by Families

```php
$manager->findByFamilies(['Abel', 'Aboreto'], limit: 10);
```

### Find by Type

```php
$manager->findByType('sans-serif', limit: -1); // -1 to get all
```

---

## 📄 FontDTO

Each font is returned as a `FontDTO` with the following structure:

```php
FontDTO {
    string $key         // "abel"
    string $provider    // "bunny"
    string $category    // "sans-serif"
    string $family      // "Abel"
    string $urlString   // "abel:400,400i"
}
```

---

## 🧪 Testing

Run the test suite using:

```bash
vendor/bin/pest
```

---

## 🛠 Development

If you're working on this package, install dependencies and test it via:

```bash
composer install
composer test
```

---

## 📜 License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
