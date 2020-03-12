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

/* @app/vendor/twig/twig/doc/filters/capitalize.rst */
class __TwigTemplate_ddc333027eb200153a28985dbeace48acc85c0042bcffa77668d3ed24d802c3d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/capitalize.rst"));

        // line 1
        echo "``capitalize``
==============

The ``capitalize`` filter capitalizes a value. The first character will be
uppercase, all others lowercase:

.. code-block:: twig

    ";
        // line 9
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, "my first car"), "html", null, true);
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/capitalize.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``capitalize``
==============

The ``capitalize`` filter capitalizes a value. The first character will be
uppercase, all others lowercase:

.. code-block:: twig

    {{ 'my first car'|capitalize }}

    {# outputs 'My first car' #}
", "@app/vendor/twig/twig/doc/filters/capitalize.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\capitalize.rst");
    }
}
