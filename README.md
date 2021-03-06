# Noop - The no operation library

![Logo](https://avatars0.githubusercontent.com/u/38306540?s=200&v=4)

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/CatfishPHP/Container/master.svg?style=flat-square)](https://travis-ci.org/catfishphp/container)

Why should JavaScript have all the fun? In the spirit of the `noop` [NPM module](https://www.npmjs.com/package/noop). Catfish's Noop composer library does nothing while still being 100% tested.

This package is compliant with [PSR-1], [PSR-2] and [PSR-4]. If you notice compliance oversights,
please send a patch via pull request.

[PSR-1]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md
[PSR-2]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
[PSR-4]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md
[PSR-11]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-11-container.md

## Install

Via Composer

``` bash
$ composer require catfishphp/noop
```

## Requirements

The following versions of PHP are supported by this version.

* PHP 7.1
* PHP 7.2

## Usage

```php
<?php
use function Catfish\Noop\noop;

noop();

```

## Testing

``` bash
$ vendor/bin/phpunit
```

## Contributing

Please see [CONTRIBUTING](https://github.com/catfishphp/container/blob/master/CONTRIBUTING) for details.

## License

The MIT License (MIT). Please see [License File](https://github.com/catfishphp/container/blob/master/LICENSE) for more information.
