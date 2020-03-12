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

/* @app/vendor/doctrine/migrations/docs/en/sidebar.rst */
class __TwigTemplate_7d3b39fb6ff5eafb8c18f8e73db3aa27f2f5faa7a0de4d11e6c36660500b602a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/migrations/docs/en/sidebar.rst"));

        // line 1
        echo ".. toctree::
   :depth: 3

   reference/introduction
   reference/configuration
   reference/migration-classes
   reference/managing-migrations
   reference/generating-migrations
   reference/custom-configuration
   reference/events
   reference/version-numbers
   reference/integrations
   reference/custom-integration
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/migrations/docs/en/sidebar.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".. toctree::
   :depth: 3

   reference/introduction
   reference/configuration
   reference/migration-classes
   reference/managing-migrations
   reference/generating-migrations
   reference/custom-configuration
   reference/events
   reference/version-numbers
   reference/integrations
   reference/custom-integration
", "@app/vendor/doctrine/migrations/docs/en/sidebar.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\migrations\\docs\\en\\sidebar.rst");
    }
}
