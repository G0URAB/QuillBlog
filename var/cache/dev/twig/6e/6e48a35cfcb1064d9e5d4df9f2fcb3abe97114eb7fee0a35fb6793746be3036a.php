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

/* @app/vendor/ocramius/proxy-manager/docs/tuning-for-production.md */
class __TwigTemplate_c6e15bce57bc5a8dd08700f86b821694744d6cc98fb7c37f696e2579a5c71fb0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/ocramius/proxy-manager/docs/tuning-for-production.md"));

        // line 1
        echo "---
title: Tuning the ProxyManager for production
---

## Tuning the ProxyManager for production

By default, all proxy factories generate the required proxy classes at runtime.

Proxy generation causes I/O operations and uses a lot of reflection, so be sure to have
generated all of your proxies **before deploying your code on a live system**, or you
may experience poor performance.

You can configure ProxyManager so that it will try autoloading the proxies first.
Generating them \"bulk\" is not yet implemented:

```php
\$config = new \\ProxyManager\\Configuration();
\$config->setProxiesTargetDir(__DIR__ . '/my/generated/classes/cache/dir');

// then register the autoloader
spl_autoload_register(\$config->getProxyAutoloader());
```

Generating a classmap with all your proxy classes in it will also work perfectly.

Please note that all the currently implemented `ProxyManager\\Factory\\*` classes accept
a `ProxyManager\\Configuration` object as optional constructor parameter. This allows for
fine-tuning of ProxyManager according to your needs.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/ocramius/proxy-manager/docs/tuning-for-production.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("---
title: Tuning the ProxyManager for production
---

## Tuning the ProxyManager for production

By default, all proxy factories generate the required proxy classes at runtime.

Proxy generation causes I/O operations and uses a lot of reflection, so be sure to have
generated all of your proxies **before deploying your code on a live system**, or you
may experience poor performance.

You can configure ProxyManager so that it will try autoloading the proxies first.
Generating them \"bulk\" is not yet implemented:

```php
\$config = new \\ProxyManager\\Configuration();
\$config->setProxiesTargetDir(__DIR__ . '/my/generated/classes/cache/dir');

// then register the autoloader
spl_autoload_register(\$config->getProxyAutoloader());
```

Generating a classmap with all your proxy classes in it will also work perfectly.

Please note that all the currently implemented `ProxyManager\\Factory\\*` classes accept
a `ProxyManager\\Configuration` object as optional constructor parameter. This allows for
fine-tuning of ProxyManager according to your needs.
", "@app/vendor/ocramius/proxy-manager/docs/tuning-for-production.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\ocramius\\proxy-manager\\docs\\tuning-for-production.md");
    }
}
