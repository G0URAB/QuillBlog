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

/* @app/vendor/doctrine/instantiator/README.md */
class __TwigTemplate_d5bd37e05bc7da4300b9f258deb8eaf526cc1325cedfc4889daf906f1bdbc9a3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/instantiator/README.md"));

        // line 1
        echo "# Instantiator

This library provides a way of avoiding usage of constructors when instantiating PHP classes.

[![Build Status](https://travis-ci.org/doctrine/instantiator.svg?branch=master)](https://travis-ci.org/doctrine/instantiator)
[![Code Coverage](https://scrutinizer-ci.com/g/doctrine/instantiator/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/doctrine/instantiator/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/doctrine/instantiator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/doctrine/instantiator/?branch=master)
[![Dependency Status](https://www.versioneye.com/package/php--doctrine--instantiator/badge.svg)](https://www.versioneye.com/package/php--doctrine--instantiator)

[![Latest Stable Version](https://poser.pugx.org/doctrine/instantiator/v/stable.png)](https://packagist.org/packages/doctrine/instantiator)
[![Latest Unstable Version](https://poser.pugx.org/doctrine/instantiator/v/unstable.png)](https://packagist.org/packages/doctrine/instantiator)

## Installation

The suggested installation method is via [composer](https://getcomposer.org/):

```sh
php composer.phar require \"doctrine/instantiator:~1.0.3\"
```

## Usage

The instantiator is able to create new instances of any class without using the constructor or any API of the class
itself:

```php
\$instantiator = new \\Doctrine\\Instantiator\\Instantiator();

\$instance = \$instantiator->instantiate(\\My\\ClassName\\Here::class);
```

## Contributing

Please read the [CONTRIBUTING.md](CONTRIBUTING.md) contents if you wish to help out!

## Credits

This library was migrated from [ocramius/instantiator](https://github.com/Ocramius/Instantiator), which
has been donated to the doctrine organization, and which is now deprecated in favour of this package.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/instantiator/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Instantiator

This library provides a way of avoiding usage of constructors when instantiating PHP classes.

[![Build Status](https://travis-ci.org/doctrine/instantiator.svg?branch=master)](https://travis-ci.org/doctrine/instantiator)
[![Code Coverage](https://scrutinizer-ci.com/g/doctrine/instantiator/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/doctrine/instantiator/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/doctrine/instantiator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/doctrine/instantiator/?branch=master)
[![Dependency Status](https://www.versioneye.com/package/php--doctrine--instantiator/badge.svg)](https://www.versioneye.com/package/php--doctrine--instantiator)

[![Latest Stable Version](https://poser.pugx.org/doctrine/instantiator/v/stable.png)](https://packagist.org/packages/doctrine/instantiator)
[![Latest Unstable Version](https://poser.pugx.org/doctrine/instantiator/v/unstable.png)](https://packagist.org/packages/doctrine/instantiator)

## Installation

The suggested installation method is via [composer](https://getcomposer.org/):

```sh
php composer.phar require \"doctrine/instantiator:~1.0.3\"
```

## Usage

The instantiator is able to create new instances of any class without using the constructor or any API of the class
itself:

```php
\$instantiator = new \\Doctrine\\Instantiator\\Instantiator();

\$instance = \$instantiator->instantiate(\\My\\ClassName\\Here::class);
```

## Contributing

Please read the [CONTRIBUTING.md](CONTRIBUTING.md) contents if you wish to help out!

## Credits

This library was migrated from [ocramius/instantiator](https://github.com/Ocramius/Instantiator), which
has been donated to the doctrine organization, and which is now deprecated in favour of this package.
", "@app/vendor/doctrine/instantiator/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\instantiator\\README.md");
    }
}
