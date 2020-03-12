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

/* @app/vendor/doctrine/reflection/README.md */
class __TwigTemplate_686b4d86d615ffabbcef0715fac6683d2c346754d2db716fc2219fe0d562aeee extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/reflection/README.md"));

        // line 1
        echo "# Doctrine Reflection

[![Build Status](https://travis-ci.org/doctrine/reflection.svg)](https://travis-ci.org/doctrine/reflection)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/doctrine/reflection/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/doctrine/reflection/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/doctrine/reflection/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/doctrine/reflection/?branch=master)

The Doctrine Reflection project is a simple library used by the various Doctrine projects which adds some additional functionality on top of the reflection functionality that comes with PHP. It allows you to get the reflection information about classes, methods and properties statically.

## More resources:

* [Website](https://www.doctrine-project.org/)
* [Documentation](https://www.doctrine-project.org/projects/doctrine-reflection/en/latest/)
* [Downloads](https://github.com/doctrine/reflection/releases)
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/reflection/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Doctrine Reflection

[![Build Status](https://travis-ci.org/doctrine/reflection.svg)](https://travis-ci.org/doctrine/reflection)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/doctrine/reflection/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/doctrine/reflection/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/doctrine/reflection/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/doctrine/reflection/?branch=master)

The Doctrine Reflection project is a simple library used by the various Doctrine projects which adds some additional functionality on top of the reflection functionality that comes with PHP. It allows you to get the reflection information about classes, methods and properties statically.

## More resources:

* [Website](https://www.doctrine-project.org/)
* [Documentation](https://www.doctrine-project.org/projects/doctrine-reflection/en/latest/)
* [Downloads](https://github.com/doctrine/reflection/releases)
", "@app/vendor/doctrine/reflection/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\reflection\\README.md");
    }
}
