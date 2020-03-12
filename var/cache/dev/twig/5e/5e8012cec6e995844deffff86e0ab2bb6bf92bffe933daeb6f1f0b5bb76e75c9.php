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

/* @app/vendor/twig/twig/doc/tests/defined.rst */
class __TwigTemplate_d983b7a2f4dc68b250c6f5bcd63cc84c3b19b7c97e9968d0c428133b86a908eb extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/tests/defined.rst"));

        // line 1
        echo "``defined``
===========

``defined`` checks if a variable is defined in the current context. This is very
useful if you use the ``strict_variables`` option:

.. code-block:: twig

    ";
        // line 10
        echo "    ";
        if ((isset($context["foo"]) || array_key_exists("foo", $context))) {
            // line 11
            echo "        ...
    ";
        }
        // line 13
        echo "
    ";
        // line 15
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["foo"] ?? null), "bar", [], "any", true, true, false, 15)) {
            // line 16
            echo "        ...
    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["foo"] ?? null), "bar", [], "array", true, true, false, 19)) {
            // line 20
            echo "        ...
    ";
        }
        // line 22
        echo "
When using the ``defined`` test on an expression that uses variables in some
method calls, be sure that they are all defined first:

.. code-block:: twig

    ";
        // line 28
        if (((isset($context["var"]) || array_key_exists("var", $context)) && twig_get_attribute($this->env, $this->source, ($context["foo"] ?? null), "method", [0 => (isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 28, $this->source); })())], "method", true, true, false, 28))) {
            // line 29
            echo "        ...
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/tests/defined.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  84 => 28,  76 => 22,  72 => 20,  70 => 19,  67 => 18,  63 => 16,  60 => 15,  57 => 13,  53 => 11,  50 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``defined``
===========

``defined`` checks if a variable is defined in the current context. This is very
useful if you use the ``strict_variables`` option:

.. code-block:: twig

    {# defined works with variable names #}
    {% if foo is defined %}
        ...
    {% endif %}

    {# and attributes on variables names #}
    {% if foo.bar is defined %}
        ...
    {% endif %}

    {% if foo['bar'] is defined %}
        ...
    {% endif %}

When using the ``defined`` test on an expression that uses variables in some
method calls, be sure that they are all defined first:

.. code-block:: twig

    {% if var is defined and foo.method(var) is defined %}
        ...
    {% endif %}
", "@app/vendor/twig/twig/doc/tests/defined.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\tests\\defined.rst");
    }
}
