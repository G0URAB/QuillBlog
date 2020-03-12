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

/* @app/vendor/doctrine/persistence/README.md */
class __TwigTemplate_1f798e3f4b3755f0d8ce6160f403b0cf2f7d650dc84629b6e5a809d9c7229373 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/README.md"));

        // line 1
        echo "# Doctrine Persistence

[![Build Status](https://travis-ci.org/doctrine/persistence.svg)](https://travis-ci.org/doctrine/persistence)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/doctrine/persistence/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/doctrine/persistence/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/doctrine/persistence/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/doctrine/persistence/?branch=master)

The Doctrine Persistence project is a library that provides common abstractions for object mapper persistence.

## More resources:

* [Website](https://www.doctrine-project.org/)
* [Documentation](https://www.doctrine-project.org/projects/doctrine-persistence/en/latest/index.html)
* [Downloads](https://github.com/doctrine/persistence/releases)
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Doctrine Persistence

[![Build Status](https://travis-ci.org/doctrine/persistence.svg)](https://travis-ci.org/doctrine/persistence)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/doctrine/persistence/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/doctrine/persistence/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/doctrine/persistence/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/doctrine/persistence/?branch=master)

The Doctrine Persistence project is a library that provides common abstractions for object mapper persistence.

## More resources:

* [Website](https://www.doctrine-project.org/)
* [Documentation](https://www.doctrine-project.org/projects/doctrine-persistence/en/latest/index.html)
* [Downloads](https://github.com/doctrine/persistence/releases)
", "@app/vendor/doctrine/persistence/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\README.md");
    }
}
