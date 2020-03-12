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

/* @app/vendor/doctrine/persistence/UPGRADE-1.2.md */
class __TwigTemplate_49c9895928d0196471504a54740678d0c5ae34c251018d96b4741d3fd611a33b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/persistence/UPGRADE-1.2.md"));

        // line 1
        echo "UPGRADE FROM 1.x to 1.2
=======================

* Deprecated `ObjectManager::merge()`. Please handle merge operations in your application instead.
* Deprecated `ObjectManager::detach()`. Please use `ObjectManager::clear()` instead.
* Deprecated `PersistentObject` class. Please implement this functionality directly in your application if you want ActiveRecord style functionality.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/persistence/UPGRADE-1.2.md";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("UPGRADE FROM 1.x to 1.2
=======================

* Deprecated `ObjectManager::merge()`. Please handle merge operations in your application instead.
* Deprecated `ObjectManager::detach()`. Please use `ObjectManager::clear()` instead.
* Deprecated `PersistentObject` class. Please implement this functionality directly in your application if you want ActiveRecord style functionality.
", "@app/vendor/doctrine/persistence/UPGRADE-1.2.md", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\persistence\\UPGRADE-1.2.md");
    }
}
