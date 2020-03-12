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

/* @app/vendor/doctrine/instantiator/phpstan.neon.dist */
class __TwigTemplate_3457004077c3a7abaa6e8c867467ae99093148daef1891ef31ea3c56f89b1046 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/instantiator/phpstan.neon.dist"));

        // line 1
        echo "includes:
    - vendor/phpstan/phpstan-phpunit/extension.neon
    - vendor/phpstan/phpstan-phpunit/rules.neon

parameters:
    level: max
    paths:
        - src
        - tests

    ignoreErrors:
        -
            message: '#::__construct\\(\\) does not call parent constructor from#'
            path: '*/tests/DoctrineTest/InstantiatorTestAsset/*.php'

        # dynamic properties confuse static analysis
        -
            message: '#Access to an undefined property object::\\\$foo\\.#'
            path: '*/tests/DoctrineTest/InstantiatorTest/InstantiatorTest.php'
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/instantiator/phpstan.neon.dist";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("includes:
    - vendor/phpstan/phpstan-phpunit/extension.neon
    - vendor/phpstan/phpstan-phpunit/rules.neon

parameters:
    level: max
    paths:
        - src
        - tests

    ignoreErrors:
        -
            message: '#::__construct\\(\\) does not call parent constructor from#'
            path: '*/tests/DoctrineTest/InstantiatorTestAsset/*.php'

        # dynamic properties confuse static analysis
        -
            message: '#Access to an undefined property object::\\\$foo\\.#'
            path: '*/tests/DoctrineTest/InstantiatorTest/InstantiatorTest.php'
", "@app/vendor/doctrine/instantiator/phpstan.neon.dist", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\instantiator\\phpstan.neon.dist");
    }
}
