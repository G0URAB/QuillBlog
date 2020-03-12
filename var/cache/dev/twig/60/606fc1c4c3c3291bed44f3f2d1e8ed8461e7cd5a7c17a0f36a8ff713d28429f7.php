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

/* @app/vendor/doctrine/lexer/README.md */
class __TwigTemplate_f998f63989ca77bef25bcae67939313756e063c19563999b85eda283421fa325 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/lexer/README.md"));

        // line 1
        echo "# Doctrine Lexer

Build Status: [![Build Status](https://travis-ci.org/doctrine/lexer.svg?branch=master)](https://travis-ci.org/doctrine/lexer)

Base library for a lexer that can be used in Top-Down, Recursive Descent Parsers.

This lexer is used in Doctrine Annotations and in Doctrine ORM (DQL).

https://www.doctrine-project.org/projects/lexer.html
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/lexer/README.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Doctrine Lexer

Build Status: [![Build Status](https://travis-ci.org/doctrine/lexer.svg?branch=master)](https://travis-ci.org/doctrine/lexer)

Base library for a lexer that can be used in Top-Down, Recursive Descent Parsers.

This lexer is used in Doctrine Annotations and in Doctrine ORM (DQL).

https://www.doctrine-project.org/projects/lexer.html
", "@app/vendor/doctrine/lexer/README.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\lexer\\README.md");
    }
}
