# Changes in PHPUnit 9.4

All notable changes of the PHPUnit 9.4 release series are documented in this file using the [Keep a CHANGELOG](https://keepachangelog.com/) principles.

## [9.4.0] - 2020-10-02

### Added

* [#4464](https://github.com/sebastianbergmann/phpunit/issues/4464): Filter based on covered (`@covers`) / used (`@uses`) units of code
* [#4467](https://github.com/sebastianbergmann/phpunit/issues/4467): Convenient custom comparison of objects
* Added `--force-coverage-cache` CLI option for configuring the code coverage static analysis cache to not check whether cache files exist and are up-to-date (do not use this if you do not need it or cannot guarantee that the cache files exist and are up-to-date)

### Changed

* The PHPUnit XML configuration generator (that is invoked using the `--generate-configuration` CLI option) now asks for a cache directory (default: `.phpunit.cache`)

[9.4.0]: https://github.com/sebastianbergmann/phpunit/compare/9.3...master