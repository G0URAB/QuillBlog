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

/* @app/vendor/twig/twig/doc/filters/default.rst */
class __TwigTemplate_9241c16159ee0657d463d6773030e092f5b34946d3474ff9f076704bcc71c005 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/default.rst"));

        // line 1
        echo "``default``
===========

The ``default`` filter returns the passed default value if the value is
undefined or empty, otherwise the value of the variable:

.. code-block:: twig

    ";
        // line 9
        echo twig_escape_filter($this->env, (((isset($context["var"]) || array_key_exists("var", $context))) ? (_twig_default_filter((isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 9, $this->source); })()), "var is not defined")) : ("var is not defined")), "html", null, true);
        echo "

    ";
        // line 11
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["var"] ?? null), "foo", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["var"] ?? null), "foo", [], "any", false, false, false, 11), "foo item on var is not defined")) : ("foo item on var is not defined")), "html", null, true);
        echo "

    ";
        // line 13
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["var"] ?? null), "foo", [], "array", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["var"] ?? null), "foo", [], "array", false, false, false, 13), "foo item on var is not defined")) : ("foo item on var is not defined")), "html", null, true);
        echo "

    ";
        // line 15
        echo twig_escape_filter($this->env, _twig_default_filter("", "passed var is empty"), "html", null, true);
        echo "

When using the ``default`` filter on an expression that uses variables in some
method calls, be sure to use the ``default`` filter whenever a variable can be
undefined:

.. code-block:: twig

    ";
        // line 23
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["var"] ?? null), "method", [0 => (((isset($context["foo"]) || array_key_exists("foo", $context))) ? (_twig_default_filter((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 23, $this->source); })()), "foo")) : ("foo"))], "method", true, true, false, 23)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["var"] ?? null), "method", [0 => (((isset($context["foo"]) || array_key_exists("foo", $context))) ? (_twig_default_filter((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 23, $this->source); })()), "foo")) : ("foo"))], "method", false, false, false, 23), "foo")) : ("foo")), "html", null, true);
        echo "

.. note::

    Read the documentation for the :doc:`defined<../tests/defined>` and
    :doc:`empty<../tests/empty>` tests to learn more about their semantics.

Arguments
---------

* ``default``: The default value
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/default.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  65 => 15,  60 => 13,  55 => 11,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``default``
===========

The ``default`` filter returns the passed default value if the value is
undefined or empty, otherwise the value of the variable:

.. code-block:: twig

    {{ var|default('var is not defined') }}

    {{ var.foo|default('foo item on var is not defined') }}

    {{ var['foo']|default('foo item on var is not defined') }}

    {{ ''|default('passed var is empty')  }}

When using the ``default`` filter on an expression that uses variables in some
method calls, be sure to use the ``default`` filter whenever a variable can be
undefined:

.. code-block:: twig

    {{ var.method(foo|default('foo'))|default('foo') }}

.. note::

    Read the documentation for the :doc:`defined<../tests/defined>` and
    :doc:`empty<../tests/empty>` tests to learn more about their semantics.

Arguments
---------

* ``default``: The default value
", "@app/vendor/twig/twig/doc/filters/default.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\default.rst");
    }
}
