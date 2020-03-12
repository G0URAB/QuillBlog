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

/* @app/vendor/doctrine/cache/README.md */
class __TwigTemplate_52b33c75e179397ca54596e4a476dc5c3226101458ce348b25bf37c7f6ee662d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/cache/README.md"));

        // line 1
        echo "# Doctrine Cache

[![Build Status](https://img.shields.io/travis/doctrine/cache/master.svg?style=flat-square)](http://travis-ci.org/doctrine/cache) 
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/doctrine/cache/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/doctrine/cache/?branch=master) 
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/doctrine/cache/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/doctrine/cache/?branch=master)

[![Latest Stable Version](https://img.shields.io/packagist/v/doctrine/cache.svg?style=flat-square)](https://packagist.org/packages/doctrine/cache)
[![Total Downloads](https://img.shields.io/packagist/dt/doctrine/cache.svg?style=flat-square)](https://packagist.org/packages/doctrine/cache)

Cache component extracted from the Doctrine Common project. [Documentation](https://www.doctrine-project.org/projects/doctrine-orm/en/current/reference/caching.html)
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/cache/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Doctrine Cache

[![Build Status](https://img.shields.io/travis/doctrine/cache/master.svg?style=flat-square)](http://travis-ci.org/doctrine/cache) 
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/doctrine/cache/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/doctrine/cache/?branch=master) 
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/doctrine/cache/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/doctrine/cache/?branch=master)

[![Latest Stable Version](https://img.shields.io/packagist/v/doctrine/cache.svg?style=flat-square)](https://packagist.org/packages/doctrine/cache)
[![Total Downloads](https://img.shields.io/packagist/dt/doctrine/cache.svg?style=flat-square)](https://packagist.org/packages/doctrine/cache)

Cache component extracted from the Doctrine Common project. [Documentation](https://www.doctrine-project.org/projects/doctrine-orm/en/current/reference/caching.html)
", "@app/vendor/doctrine/cache/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\cache\\README.md");
    }
}
