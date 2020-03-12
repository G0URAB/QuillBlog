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

/* @app/vendor/doctrine/migrations/phpstan.neon.dist */
class __TwigTemplate_d60de201cf1d1ed3a6f50a43a6a2a3eb7e1231a2b0d7bcb9d2183cc098356e91 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/phpstan.neon.dist"));

        // line 1
        echo "parameters:
    level: 7
    paths:
        - %currentWorkingDirectory%/lib
        - %currentWorkingDirectory%/tests
    autoload_directories:
        - %currentWorkingDirectory%/tests/Doctrine/Migrations/Tests/Finder/_features
        - %currentWorkingDirectory%/tests/Doctrine/Migrations/Tests/Finder/_files
        - %currentWorkingDirectory%/tests/Doctrine/Migrations/Tests/Finder/_regression
        - %currentWorkingDirectory%/tests/Doctrine/Migrations/Tests/Functional/_files
    autoload_files:
        - %currentWorkingDirectory%/tests/Doctrine/Migrations/Tests/Configuration/ConfigurationTestSource/Migrations/Version123.php
        - %currentWorkingDirectory%/tests/Doctrine/Migrations/Tests/realpath.php
    ignoreErrors:
        # Ignore proxy manager magic
        - '~ProxyManager\\\\Proxy\\\\VirtualProxyInterface~'
        - '~^Parameter #1 \\\$files of method Doctrine\\\\Migrations\\\\Finder\\\\Finder::loadMigrationClasses\\(\\) expects array<string>, array<int, string\\|false> given\\.\\z~'
        - '~^Class Doctrine\\\\Migrations\\\\Tests\\\\DoesNotExistAtAll not found\\.\\z~'

includes:
    - vendor/phpstan/phpstan-deprecation-rules/rules.neon
    - vendor/phpstan/phpstan-phpunit/extension.neon
    - vendor/phpstan/phpstan-phpunit/rules.neon
    - vendor/phpstan/phpstan-strict-rules/rules.neon
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/phpstan.neon.dist";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("parameters:
    level: 7
    paths:
        - %currentWorkingDirectory%/lib
        - %currentWorkingDirectory%/tests
    autoload_directories:
        - %currentWorkingDirectory%/tests/Doctrine/Migrations/Tests/Finder/_features
        - %currentWorkingDirectory%/tests/Doctrine/Migrations/Tests/Finder/_files
        - %currentWorkingDirectory%/tests/Doctrine/Migrations/Tests/Finder/_regression
        - %currentWorkingDirectory%/tests/Doctrine/Migrations/Tests/Functional/_files
    autoload_files:
        - %currentWorkingDirectory%/tests/Doctrine/Migrations/Tests/Configuration/ConfigurationTestSource/Migrations/Version123.php
        - %currentWorkingDirectory%/tests/Doctrine/Migrations/Tests/realpath.php
    ignoreErrors:
        # Ignore proxy manager magic
        - '~ProxyManager\\\\Proxy\\\\VirtualProxyInterface~'
        - '~^Parameter #1 \\\$files of method Doctrine\\\\Migrations\\\\Finder\\\\Finder::loadMigrationClasses\\(\\) expects array<string>, array<int, string\\|false> given\\.\\z~'
        - '~^Class Doctrine\\\\Migrations\\\\Tests\\\\DoesNotExistAtAll not found\\.\\z~'

includes:
    - vendor/phpstan/phpstan-deprecation-rules/rules.neon
    - vendor/phpstan/phpstan-phpunit/extension.neon
    - vendor/phpstan/phpstan-phpunit/rules.neon
    - vendor/phpstan/phpstan-strict-rules/rules.neon
", "@app/vendor/doctrine/migrations/phpstan.neon.dist", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\phpstan.neon.dist");
    }
}
