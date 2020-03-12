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

/* @app/vendor/doctrine/doctrine-bundle/UPGRADE-1.11.md */
class __TwigTemplate_d7f018fadc4c7aa230129ff7af6808dd14fb524c58f1a8dfb7372a554bf97284 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/UPGRADE-1.11.md"));

        // line 1
        echo "UPGRADE FROM 1.10 to 1.11
=========================

PHP and Symfony version support
-------------------------------

 * Support for PHP 5.5, 5.6 and 7.0 was dropped
 * Support for unsupported Symfony versions was dropped. The bundle now supports
   Symfony 3.4 LTS and 4.1 or newer.
 * Support for Twig 1.34 and below as well as 2.4 and below (for 2.x) releases
   was dropped.

Commands
--------

 * Deprecated instantiating `Doctrine\\Bundle\\DoctrineBundle\\Command` without a
   `ManagerRegistry` instance.
 * Deprecated `setContainer` and `getContainer` in
   `Doctrine\\Bundle\\DoctrineBundle\\Command`.
 * `Doctrine\\Bundle\\DoctrineBundle\\Command` no longer implements
   `ContainerAwareInterface`.

Mapping
-------

 * Renamed `ContainerAwareEntityListenerResolver` to
   `ContainerEntityListenerResolver`.

Types
-----

 * Marking types as commented in the configuration is deprecated. Instead, mark
   them commented using the `requiresSQLCommentHint()` method of the type.
 * The `commented` configuration option for types will be dropped in a future
   release. You should avoid using it.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/UPGRADE-1.11.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("UPGRADE FROM 1.10 to 1.11
=========================

PHP and Symfony version support
-------------------------------

 * Support for PHP 5.5, 5.6 and 7.0 was dropped
 * Support for unsupported Symfony versions was dropped. The bundle now supports
   Symfony 3.4 LTS and 4.1 or newer.
 * Support for Twig 1.34 and below as well as 2.4 and below (for 2.x) releases
   was dropped.

Commands
--------

 * Deprecated instantiating `Doctrine\\Bundle\\DoctrineBundle\\Command` without a
   `ManagerRegistry` instance.
 * Deprecated `setContainer` and `getContainer` in
   `Doctrine\\Bundle\\DoctrineBundle\\Command`.
 * `Doctrine\\Bundle\\DoctrineBundle\\Command` no longer implements
   `ContainerAwareInterface`.

Mapping
-------

 * Renamed `ContainerAwareEntityListenerResolver` to
   `ContainerEntityListenerResolver`.

Types
-----

 * Marking types as commented in the configuration is deprecated. Instead, mark
   them commented using the `requiresSQLCommentHint()` method of the type.
 * The `commented` configuration option for types will be dropped in a future
   release. You should avoid using it.
", "@app/vendor/doctrine/doctrine-bundle/UPGRADE-1.11.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\UPGRADE-1.11.md");
    }
}
