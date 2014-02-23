# CHANGELOG

## dev-master

## 2.0.3

* #20 Table class
* #17 `?where` placeholder for WHERE statement
* #21 `?cols`: empty array or TRUE is `*`
* Composer
* Class Storage is not final
* Refactoring of unit tests

## 2.0.2

* #14 New autoload: Autoloader:register()
* #12 Fix connector for PgSQL
* #13 PSR-2
* #23 Exception indicates the entry point to go\DB
* #15 Refactoring unit-tests

## 2.0.1 beta (24.04.2012)

* [PgSQL adapter](https://github.com/vasa-c/go-db/wiki/Adapters_pgsql)
* Fix negative number: x=x-?i => x=x--1. Use brackets: x=x-(-1)
* Fix `Exceptions\Query`: `getQuery()` & `getError()` returning `NULL`.
* Ref: some Implementation-methods required `connection` (for PgSQL)
* up phpunit to 3.5

## 2.0.0 beta (09.01.2011)
