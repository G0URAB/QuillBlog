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

/* @app/vendor/doctrine/event-manager/README.md */
class __TwigTemplate_05fcca33318ac6f560bf429464bde8869ff6228af2686152fd55879da799c7f4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/event-manager/README.md"));

        // line 1
        echo "# Doctrine Event Manager

[![Build Status](https://travis-ci.org/doctrine/event-manager.svg)](https://travis-ci.org/doctrine/event-manager)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/doctrine/event-manager/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/doctrine/event-manager/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/doctrine/event-manager/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/doctrine/event-manager/?branch=master)

The Doctrine Event Manager is a library that provides a simple event system.

## More resources:

* [Website](https://www.doctrine-project.org/)
* [Documentation](https://www.doctrine-project.org/projects/doctrine-event-manager/en/latest/)
* [Downloads](https://github.com/doctrine/event-manager/releases)
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/event-manager/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Doctrine Event Manager

[![Build Status](https://travis-ci.org/doctrine/event-manager.svg)](https://travis-ci.org/doctrine/event-manager)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/doctrine/event-manager/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/doctrine/event-manager/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/doctrine/event-manager/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/doctrine/event-manager/?branch=master)

The Doctrine Event Manager is a library that provides a simple event system.

## More resources:

* [Website](https://www.doctrine-project.org/)
* [Documentation](https://www.doctrine-project.org/projects/doctrine-event-manager/en/latest/)
* [Downloads](https://github.com/doctrine/event-manager/releases)
", "@app/vendor/doctrine/event-manager/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\event-manager\\README.md");
    }
}
