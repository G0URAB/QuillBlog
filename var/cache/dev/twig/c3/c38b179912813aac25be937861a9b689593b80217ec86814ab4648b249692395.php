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

/* @app/vendor/twig/twig/doc/filters/join.rst */
class __TwigTemplate_e33469e5ec5a2264d3d19a5ccf97639ffe6c9182b6d22f8b2afc3fdca713e5d1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/join.rst"));

        // line 1
        echo "``join``
========

The ``join`` filter returns a string which is the concatenation of the items
of a sequence:

.. code-block:: twig

    ";
        // line 9
        echo twig_escape_filter($this->env, twig_join_filter([0 => 1, 1 => 2, 2 => 3]), "html", null, true);
        echo "
    ";
        // line 11
        echo "
The separator between elements is an empty string per default, but you can
define it with the optional first parameter:

.. code-block:: twig

    ";
        // line 17
        echo twig_escape_filter($this->env, twig_join_filter([0 => 1, 1 => 2, 2 => 3], "|"), "html", null, true);
        echo "
    ";
        // line 19
        echo "
A second parameter can also be provided that will be the separator used between
the last two items of the sequence:

.. code-block:: twig

    ";
        // line 25
        echo twig_escape_filter($this->env, twig_join_filter([0 => 1, 1 => 2, 2 => 3], ", ", " and "), "html", null, true);
        echo "
    ";
        // line 27
        echo "
Arguments
---------

* ``glue``: The separator
* ``and``: The separator for the last pair of input items
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/join.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  74 => 25,  66 => 19,  62 => 17,  54 => 11,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``join``
========

The ``join`` filter returns a string which is the concatenation of the items
of a sequence:

.. code-block:: twig

    {{ [1, 2, 3]|join }}
    {# returns 123 #}

The separator between elements is an empty string per default, but you can
define it with the optional first parameter:

.. code-block:: twig

    {{ [1, 2, 3]|join('|') }}
    {# outputs 1|2|3 #}

A second parameter can also be provided that will be the separator used between
the last two items of the sequence:

.. code-block:: twig

    {{ [1, 2, 3]|join(', ', ' and ') }}
    {# outputs 1, 2 and 3 #}

Arguments
---------

* ``glue``: The separator
* ``and``: The separator for the last pair of input items
", "@app/vendor/twig/twig/doc/filters/join.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\join.rst");
    }
}
