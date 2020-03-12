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

/* @app/vendor/doctrine/reflection/phpstan.neon.dist */
class __TwigTemplate_2db4e6bbe3d83fc6a4d333c266b378cad31aa208ad3a9c653a013db3239c320e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/reflection/phpstan.neon.dist"));

        // line 1
        echo "parameters:
    level: 3
    paths:
        - %rootDir%/../../../lib
        - %rootDir%/../../../tests

    ignoreErrors:
        - '#Doctrine\\\\Common\\\\Reflection\\\\StaticReflection[a-zA-Z0-9_]+::__construct\\(\\) does not call parent constructor from Reflection[a-zA-Z0-9_]+#'

includes:
    - vendor/phpstan/phpstan-phpunit/extension.neon
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/reflection/phpstan.neon.dist";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("parameters:
    level: 3
    paths:
        - %rootDir%/../../../lib
        - %rootDir%/../../../tests

    ignoreErrors:
        - '#Doctrine\\\\Common\\\\Reflection\\\\StaticReflection[a-zA-Z0-9_]+::__construct\\(\\) does not call parent constructor from Reflection[a-zA-Z0-9_]+#'

includes:
    - vendor/phpstan/phpstan-phpunit/extension.neon
", "@app/vendor/doctrine/reflection/phpstan.neon.dist", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\reflection\\phpstan.neon.dist");
    }
}
