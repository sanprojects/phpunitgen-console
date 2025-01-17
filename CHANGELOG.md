# Change Log

## 2.0.0-alpha3

**Added**

- Compatibility with Laravel Lumen framework.

## 2.0.0-alpha2

**Fixed**

- Version number output on CLI.

## 2.0.0-alpha1

**Changed**

- Support for PHP `^7.1` and `^8.0` (instead of only `^7.1`).
- Use `phpunitgen/core` `^2.0` instead of `^1.0`.

**Breaking changes**

Due to the migration to `ondrejmirtes/better-reflection`, interfaces, classes and traits of PhpUnitGen are now using
the `PHPStan` namespaced classes instead of `Roave`. This means that several properties, parameters or returns types are
changing for the new namespace.

For example, `TestGenerator` interface's `generate` method will now accept a
`PHPStan\BetterReflection\Reflection\ReflectionClass` instead of a
`Roave\BetterReflection\Reflection\ReflectionClass`.

## 1.4.0

**Added**

- Compatibility with Laravel Lumen framework.

## 1.3.2

**Changed**

- Fix source path resolving for single file on Windows (see #2).

## 1.3.1

**Removed**

- Package `ocramius/package-versions`: this avoids the package to break on Composer 2 with PHP 7.1.

## 1.3.0

**Added**

- Support for `tightenco/collect` `8`.
- Support for Laravel `8` (and `Models` directory).

## 1.2.1

**Changed**

- Support for `tightenco/collect` `5.8` to `7.0`.

## 1.2.0

**Added**

- Support for PHP `7.1+` (instead of `7.2+`) and Laravel `5.8+` (instead of `6.0+`).

## 1.1.0

**Added**

- Compatibility with Windows file system on `LeagueFilesystem` class.

## 1.0.0-alpha3

**Added**

- Refactor code by adding the `HasOutput` trait, used by `ProcessHandler` and `CommandFinishedListener`.

## 1.0.0-alpha2

**Changed**

- Argument `target` cannot be an existing file anymore.

## 1.0.0-alpha1

First release of command line package.
