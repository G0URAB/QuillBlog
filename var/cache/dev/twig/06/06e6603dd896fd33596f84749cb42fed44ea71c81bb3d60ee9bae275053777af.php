<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @app/vendor/ocramius/package-versions/README.md */
class __TwigTemplate_3b9a3957c94bb551b80fcc54706856d2ed976e903930560b09878a9b0d402e28 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/package-versions/README.md"));

        // line 1
        echo "# Package Versions

This utility provides quick and easy access to version information of composer dependencies.

This information is derived from the ```composer.lock``` file which is (re)generated during ```composer install``` or ```composer update```.

```php
\$version = \\PackageVersions\\Versions::getVersion('ocramius/package-versions');

var_dump(\$version); // 1.0.0@0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33
```

[![Build Status](https://travis-ci.org/Ocramius/PackageVersions.svg?branch=master)](https://travis-ci.org/Ocramius/PackageVersions)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Ocramius/PackageVersions/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Ocramius/PackageVersions/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/Ocramius/PackageVersions/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Ocramius/PackageVersions/?branch=master)
[![Downloads](https://img.shields.io/packagist/dt/ocramius/package-versions.svg)](https://packagist.org/packages/ocramius/package-versions)
[![Packagist](https://img.shields.io/packagist/v/ocramius/package-versions.svg)](https://packagist.org/packages/ocramius/package-versions)
[![Dependencies](https://tidelift.com/badges/github/packagist/ocramius%2Fpackage-versions)](https://tidelift.com/subscription/pkg/packagist-ocramius%2Fpackage-versions?utm_source=packagist-ocramius%2Fpackage-versions&utm_medium=readme)

### Installation

```sh
composer require ocramius/package-versions
```

It is suggested that you use [an optimized composer autoloader](https://getcomposer.org/doc/06-config.md#optimize-autoloader) (to prevent autoload I/O when accessing the `PackageVersions\\Versions` API) in your composer.json:
```
...
    \"config\": {
        \"optimize-autoloader\": true
    },
...
```

In case you manually generate your autoloader via the CLI use the `--optimize` flag:

```sh
composer dump-autoload --optimize
```

### Use-cases

This repository implements `PackageVersions\\Versions::getVersion()` in such a way that no IO
happens when calling it, because the list of package versions is compiled during composer
installation.

This is especially useful when you want to generate assets/code/artifacts that are computed from
the current version of a certain dependency. Doing so at runtime by checking the installed
version of a package would be too expensive, and this package mitigates that.

## Professional Support

[Professionally supported `ocramius/package-versions` is available through Tidelift](https://tidelift.com/subscription/pkg/packagist-ocramius-package-versions?utm_source=packagist-ocramius-package-versions&utm_medium=referral&utm_campaign=readme).

You can also contact the maintainer at ocramius@gmail.com for looking into issues related to this package
in your private projects.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/package-versions/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Package Versions

This utility provides quick and easy access to version information of composer dependencies.

This information is derived from the ```composer.lock``` file which is (re)generated during ```composer install``` or ```composer update```.

```php
\$version = \\PackageVersions\\Versions::getVersion('ocramius/package-versions');

var_dump(\$version); // 1.0.0@0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33
```

[![Build Status](https://travis-ci.org/Ocramius/PackageVersions.svg?branch=master)](https://travis-ci.org/Ocramius/PackageVersions)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Ocramius/PackageVersions/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Ocramius/PackageVersions/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/Ocramius/PackageVersions/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Ocramius/PackageVersions/?branch=master)
[![Downloads](https://img.shields.io/packagist/dt/ocramius/package-versions.svg)](https://packagist.org/packages/ocramius/package-versions)
[![Packagist](https://img.shields.io/packagist/v/ocramius/package-versions.svg)](https://packagist.org/packages/ocramius/package-versions)
[![Dependencies](https://tidelift.com/badges/github/packagist/ocramius%2Fpackage-versions)](https://tidelift.com/subscription/pkg/packagist-ocramius%2Fpackage-versions?utm_source=packagist-ocramius%2Fpackage-versions&utm_medium=readme)

### Installation

```sh
composer require ocramius/package-versions
```

It is suggested that you use [an optimized composer autoloader](https://getcomposer.org/doc/06-config.md#optimize-autoloader) (to prevent autoload I/O when accessing the `PackageVersions\\Versions` API) in your composer.json:
```
...
    \"config\": {
        \"optimize-autoloader\": true
    },
...
```

In case you manually generate your autoloader via the CLI use the `--optimize` flag:

```sh
composer dump-autoload --optimize
```

### Use-cases

This repository implements `PackageVersions\\Versions::getVersion()` in such a way that no IO
happens when calling it, because the list of package versions is compiled during composer
installation.

This is especially useful when you want to generate assets/code/artifacts that are computed from
the current version of a certain dependency. Doing so at runtime by checking the installed
version of a package would be too expensive, and this package mitigates that.

## Professional Support

[Professionally supported `ocramius/package-versions` is available through Tidelift](https://tidelift.com/subscription/pkg/packagist-ocramius-package-versions?utm_source=packagist-ocramius-package-versions&utm_medium=referral&utm_campaign=readme).

You can also contact the maintainer at ocramius@gmail.com for looking into issues related to this package
in your private projects.
", "@app/vendor/ocramius/package-versions/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\package-versions\\README.md");
    }
}
