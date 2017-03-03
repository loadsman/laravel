# Laravel plugin for [Loadsman](https://github.com/loadsman/loadsman)

[![Chat][gitter-badge]][gitter-url]
[![Build status][travis-badge]][travis-url]
[![Code quality][scrutinizer-badge]][scrutinizer-url]
[![Coverage][scrutinizer-coverage-badge]][scrutinizer-coverage-url]

## Installation

1) Require this package with composer:
``` 
composer require loadsman/laravel-plugin
```

2) Add this line to `providers` array in `config/app.php`
```
Loadsman\LaravelPlugin\LoadsmanServiceProvider::class,
```

## Licence
MIT

[gitter-badge]: https://img.shields.io/gitter/room/loadsman-chat/Lobby.svg?style=flat-square
[gitter-url]: https://gitter.im/loadsman-chat/Lobby?utm_source=share-link&utm_medium=link&utm_campaign=share-link

[travis-badge]: https://img.shields.io/travis/loadsman/laravel-plugin/master.svg?style=flat-square
[travis-url]: https://travis-ci.org/loadsman/laravel-plugin

[scrutinizer-badge]: https://img.shields.io/scrutinizer/g/loadsman/laravel-plugin/master.svg?style=flat-square
[scrutinizer-url]: https://scrutinizer-ci.com/g/loadsman/laravel-plugin/?branch=master

[scrutinizer-coverage-badge]: https://img.shields.io/scrutinizer/coverage/g/loadsman/laravel-plugin/master.svg?style=flat-square
[scrutinizer-coverage-url]: https://scrutinizer-ci.com/g/loadsman/laravel-plugin/?branch=master
