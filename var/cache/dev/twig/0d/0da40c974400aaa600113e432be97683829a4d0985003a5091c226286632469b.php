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

/* @app/vendor/doctrine/doctrine-bundle/UPGRADE-1.12.md */
class __TwigTemplate_2e4960f8cf08e3567c69bfdfa4bc4081e7d8c4c0fbe24205086a7712b8d4e46d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/doctrine-bundle/UPGRADE-1.12.md"));

        // line 1
        echo "UPGRADE FROM 1.11 to 1.12
=========================

Deprecation of DoctrineCacheBundle
----------------------------------

With DoctrineCacheBundle [being deprecated](https://github.com/doctrine/DoctrineCacheBundle/issues/156),
configuring caches through it has been deprecated. If you are using anything
other than the `pool` or `id` cache types, please update your configuration to
either use symfony/cache through the `pool` type or configure your cache
services manually and use the `service` type.

Service aliases
---------------

 * Deprecated the `Symfony\\Bridge\\Doctrine\\RegistryInterface` and `Doctrine\\Bundle\\DoctrineBundle\\Registry` service alias, use `Doctrine\\Common\\Persistence\\ManagerRegistry` instead.
 * Deprecated the `Doctrine\\Common\\Persistence\\ObjectManager` service alias, use `Doctrine\\ORM\\EntityManagerInterface` instead.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/doctrine-bundle/UPGRADE-1.12.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("UPGRADE FROM 1.11 to 1.12
=========================

Deprecation of DoctrineCacheBundle
----------------------------------

With DoctrineCacheBundle [being deprecated](https://github.com/doctrine/DoctrineCacheBundle/issues/156),
configuring caches through it has been deprecated. If you are using anything
other than the `pool` or `id` cache types, please update your configuration to
either use symfony/cache through the `pool` type or configure your cache
services manually and use the `service` type.

Service aliases
---------------

 * Deprecated the `Symfony\\Bridge\\Doctrine\\RegistryInterface` and `Doctrine\\Bundle\\DoctrineBundle\\Registry` service alias, use `Doctrine\\Common\\Persistence\\ManagerRegistry` instead.
 * Deprecated the `Doctrine\\Common\\Persistence\\ObjectManager` service alias, use `Doctrine\\ORM\\EntityManagerInterface` instead.
", "@app/vendor/doctrine/doctrine-bundle/UPGRADE-1.12.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\doctrine-bundle\\UPGRADE-1.12.md");
    }
}
