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

/* @app/vendor/doctrine/doctrine-bundle/UPGRADE-2.0.md */
class __TwigTemplate_89aff8d4cf1452a562130ff9eb3888c1e371d59e8362b7a10fce962518affc9e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/UPGRADE-2.0.md"));

        // line 1
        echo "UPGRADE FROM 1.x to 2.0
=======================

PHP and Symfony version support
-------------------------------

 * Support for PHP 5.5, 5.6 and 7.0 was dropped
 * Support for unsupported Symfony versions was dropped. The bundle now supports
   Symfony 3.4 LTS and 4.1 or newer.
 * Support for Twig 1.34 and below as well as 2.4 and below (for 2.x) releases
   was dropped.
 * When no charset parameter is defined, it now defaults to `utf8mb4` on the
   MySQL platform and to `utf8` on all other platforms.

Commands
--------

 * `Doctrine\\Bundle\\DoctrineBundle\\Command` requires a `ManagerRegistry`
   instance when instantiating.
 * Dropped `setContainer` and `getContainer` in
   `Doctrine\\Bundle\\DoctrineBundle\\Command`.
 * `Doctrine\\Bundle\\DoctrineBundle\\Command` no longer implements
   `ContainerAwareInterface`.
 * `Doctrine\\Bundle\\DoctrineBundle\\Command\\GenerateEntitiesDoctrineCommand` was
   dropped in favour of the MakerBundle.

Deprecation of DoctrineCacheBundle
----------------------------------

Configuring caches through DoctrineCacheBundle is no longer possible. Please use
symfony/cache through the `pool` type or configure your cache services manually
and use the `service` type.

Mapping
-------

 * Dropped `ContainerAwareEntityListenerResolver`, use
   `ContainerEntityListenerResolver` instead.

Registry
--------

 * `Registry` no longer implements `Symfony\\Bridge\\Doctrine\\RegistryInterface`.
 * Removed all deprecated entity manager specific methods from the registry.

Service aliases
---------------

 * The `Symfony\\Bridge\\Doctrine\\RegistryInterface` interface is no longer aliased
   to the `doctrine` service, use `Doctrine\\Common\\Persistence\\ManagerRegistry`
   instead.
 * The `Doctrine\\Common\\Persistence\\ObjectManager` interface is no longer
   aliased to the `doctrine.orm.entity_manager` service, use
   `Doctrine\\ORM\\EntityManagerInterface` instead.

Types
-----

 * Marking types as commented in the configuration is no longer supported.
   Instead, mark them commented using the `requiresSQLCommentHint()` method of
   the type.
 * The `commented` configuration option for types will be dropped in a future
   release. You should not use it.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/UPGRADE-2.0.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("UPGRADE FROM 1.x to 2.0
=======================

PHP and Symfony version support
-------------------------------

 * Support for PHP 5.5, 5.6 and 7.0 was dropped
 * Support for unsupported Symfony versions was dropped. The bundle now supports
   Symfony 3.4 LTS and 4.1 or newer.
 * Support for Twig 1.34 and below as well as 2.4 and below (for 2.x) releases
   was dropped.
 * When no charset parameter is defined, it now defaults to `utf8mb4` on the
   MySQL platform and to `utf8` on all other platforms.

Commands
--------

 * `Doctrine\\Bundle\\DoctrineBundle\\Command` requires a `ManagerRegistry`
   instance when instantiating.
 * Dropped `setContainer` and `getContainer` in
   `Doctrine\\Bundle\\DoctrineBundle\\Command`.
 * `Doctrine\\Bundle\\DoctrineBundle\\Command` no longer implements
   `ContainerAwareInterface`.
 * `Doctrine\\Bundle\\DoctrineBundle\\Command\\GenerateEntitiesDoctrineCommand` was
   dropped in favour of the MakerBundle.

Deprecation of DoctrineCacheBundle
----------------------------------

Configuring caches through DoctrineCacheBundle is no longer possible. Please use
symfony/cache through the `pool` type or configure your cache services manually
and use the `service` type.

Mapping
-------

 * Dropped `ContainerAwareEntityListenerResolver`, use
   `ContainerEntityListenerResolver` instead.

Registry
--------

 * `Registry` no longer implements `Symfony\\Bridge\\Doctrine\\RegistryInterface`.
 * Removed all deprecated entity manager specific methods from the registry.

Service aliases
---------------

 * The `Symfony\\Bridge\\Doctrine\\RegistryInterface` interface is no longer aliased
   to the `doctrine` service, use `Doctrine\\Common\\Persistence\\ManagerRegistry`
   instead.
 * The `Doctrine\\Common\\Persistence\\ObjectManager` interface is no longer
   aliased to the `doctrine.orm.entity_manager` service, use
   `Doctrine\\ORM\\EntityManagerInterface` instead.

Types
-----

 * Marking types as commented in the configuration is no longer supported.
   Instead, mark them commented using the `requiresSQLCommentHint()` method of
   the type.
 * The `commented` configuration option for types will be dropped in a future
   release. You should not use it.
", "@app/vendor/doctrine/doctrine-bundle/UPGRADE-2.0.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\UPGRADE-2.0.md");
    }
}
