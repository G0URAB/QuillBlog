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

/* @app/vendor/symfony/cache/README.md */
class __TwigTemplate_cc5db0ac91a3abc03d21d989ca6b5ee57f1ee4c54980a2951006fc83a646beaa extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/symfony/cache/README.md"));

        // line 1
        echo "Symfony PSR-6 implementation for caching
========================================

This component provides an extended [PSR-6](http://www.php-fig.org/psr/psr-6/)
implementation for adding cache to your applications. It is designed to have a
low overhead so that caching is fastest. It ships with a few caching adapters
for the most widespread and suited to caching backends. It also provides a
`doctrine/cache` proxy adapter to cover more advanced caching needs and a proxy
adapter for greater interoperability between PSR-6 implementations.

Resources
---------

  * [Documentation](https://symfony.com/doc/current/components/cache.html)
  * [Contributing](https://symfony.com/doc/current/contributing/index.html)
  * [Report issues](https://github.com/symfony/symfony/issues) and
    [send Pull Requests](https://github.com/symfony/symfony/pulls)
    in the [main Symfony repository](https://github.com/symfony/symfony)
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/symfony/cache/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Symfony PSR-6 implementation for caching
========================================

This component provides an extended [PSR-6](http://www.php-fig.org/psr/psr-6/)
implementation for adding cache to your applications. It is designed to have a
low overhead so that caching is fastest. It ships with a few caching adapters
for the most widespread and suited to caching backends. It also provides a
`doctrine/cache` proxy adapter to cover more advanced caching needs and a proxy
adapter for greater interoperability between PSR-6 implementations.

Resources
---------

  * [Documentation](https://symfony.com/doc/current/components/cache.html)
  * [Contributing](https://symfony.com/doc/current/contributing/index.html)
  * [Report issues](https://github.com/symfony/symfony/issues) and
    [send Pull Requests](https://github.com/symfony/symfony/pulls)
    in the [main Symfony repository](https://github.com/symfony/symfony)
", "@app/vendor/symfony/cache/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\symfony\\cache\\README.md");
    }
}
