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

/* @app/vendor/twig/twig/doc/filters/title.rst */
class __TwigTemplate_7ac5a1b20b309225a634f49ed9aa54879f96977ea0c4e62c6a80009400904a6f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/title.rst"));

        // line 1
        echo "``title``
=========

The ``title`` filter returns a titlecased version of the value. Words will
start with uppercase letters, all remaining characters are lowercase:

.. code-block:: twig

    ";
        // line 9
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, "my first car"), "html", null, true);
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/title.rst";
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
        return new Source("``title``
=========

The ``title`` filter returns a titlecased version of the value. Words will
start with uppercase letters, all remaining characters are lowercase:

.. code-block:: twig

    {{ 'my first car'|title }}

    {# outputs 'My First Car' #}
", "@app/vendor/twig/twig/doc/filters/title.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\title.rst");
    }
}
