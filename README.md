<p align="center">
    <img src="https://raw.githubusercontent.com/nunomaduro/mock-final-classes/master/docs/doc.png" alt="Mock final classes example" height="300">
</p>

<p align="center">
  <a href="https://travis-ci.org/nunomaduro/mock-final-classes"><img src="https://img.shields.io/travis/nunomaduro/mock-final-classes/master.svg" alt="Build Status"></img></a>
  <a href="https://packagist.org/packages/nunomaduro/mock-final-classes"><img src="https://poser.pugx.org/nunomaduro/mock-final-classes/d/total.svg" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/nunomaduro/mock-final-classes"><img src="https://poser.pugx.org/nunomaduro/mock-final-classes/v/stable.svg" alt="Latest Version"></a>
  <a href="https://packagist.org/packages/nunomaduro/mock-final-classes"><img src="https://poser.pugx.org/nunomaduro/mock-final-classes/license.svg" alt="License"></a>
</p>

<p align="center">
	Created by, and is maintained by <strong><a href="https://twitter.com/enunomaduro">Nuno Maduro</a></strong>, and once installed it automatically <strong>allows mocking of final methods and classes</strong>.
</p>

## 💡 Installation & Usage

> **Requires [PHP 7.1+](https://php.net/releases/)**

First, install the package using [Composer](https://getcomposer.org):

```bash
composer require --dev nunomaduro/mock-final-classes
```

**That's it! You can now mock final methods and classes.** 🏄‍♂️

## 🤯 How it works?

1. First, we run the file [autoload.php](https://github.com/nunomaduro/mock-final-classes/blob/master/autoload.php) using [Composer Autoload](https://github.com/nunomaduro/mock-final-classes/blob/8628de25120b6106421d7730457c45ac668ecef9/composer.json#L35).
2. Then, if you are running the command [PHPUnit](https://github.com/nunomaduro/mock-final-classes/blob/master/src/Frameworks/PhpUnit.php), we use the library [dg/bypass-finals](https://github.com/dg/bypass-finals) to remove final keywords from source code on-the-fly: [https://github.com/nunomaduro/mock-final-classes/src/Runner.php#L31](https://github.com/nunomaduro/mock-final-classes/blob/8628de25120b6106421d7730457c45ac668ecef9/src/Runner.php#L31).

---

Mock Final Classes is an open-sourced software licensed under the [MIT license](LICENSE.md).
