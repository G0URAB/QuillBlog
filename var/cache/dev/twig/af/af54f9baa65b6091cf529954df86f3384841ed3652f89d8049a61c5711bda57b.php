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

/* @app/vendor/twig/twig/doc/filters/map.rst */
class __TwigTemplate_c9d17f3b792464b590e07534f48d85f49760addb400209c81a315728d70c7251 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/map.rst"));

        // line 1
        echo "``map``
=======

The ``map`` filter applies an arrow function to the elements of a sequence or a
mapping. The arrow function receives the value of the sequence or mapping:

.. code-block:: twig

    ";
        // line 9
        $context["people"] = [0 => ["first" => "Bob", "last" => "Smith"], 1 => ["first" => "Alice", "last" => "Dupond"]];
        // line 13
        echo "
    ";
        // line 14
        echo twig_escape_filter($this->env, twig_join_filter(twig_array_map((isset($context["people"]) || array_key_exists("people", $context) ? $context["people"] : (function () { throw new RuntimeError('Variable "people" does not exist.', 14, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return ((twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 14, $this->source); })()), "first", [], "any", false, false, false, 14) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 14, $this->source); })()), "last", [], "any", false, false, false, 14)); }), ", "), "html", null, true);
        echo "
    ";
        // line 16
        echo "
The arrow function also receives the key as a second argument:

.. code-block:: twig

    ";
        // line 21
        $context["people"] = ["Bob" => "Smith", "Alice" => "Dupond"];
        // line 25
        echo "
    ";
        // line 26
        echo twig_escape_filter($this->env, twig_join_filter(twig_array_map((isset($context["people"]) || array_key_exists("people", $context) ? $context["people"] : (function () { throw new RuntimeError('Variable "people" does not exist.', 26, $this->source); })()), function ($__last__, $__first__) use ($context, $macros) { $context["last"] = $__last__; $context["first"] = $__first__; return (((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 26, $this->source); })()) . " ") . (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 26, $this->source); })())); }), ", "), "html", null, true);
        echo "
    ";
        // line 28
        echo "
Note that the arrow function has access to the current context.

Arguments
---------

* ``arrow``: The arrow function
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/map.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  71 => 26,  68 => 25,  66 => 21,  59 => 16,  55 => 14,  52 => 13,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``map``
=======

The ``map`` filter applies an arrow function to the elements of a sequence or a
mapping. The arrow function receives the value of the sequence or mapping:

.. code-block:: twig

    {% set people = [
        {first: \"Bob\", last: \"Smith\"},
        {first: \"Alice\", last: \"Dupond\"},
    ] %}

    {{ people|map(p => \"#{p.first} #{p.last}\")|join(', ') }}
    {# outputs Bob Smith, Alice Dupond #}

The arrow function also receives the key as a second argument:

.. code-block:: twig

    {% set people = {
        \"Bob\": \"Smith\",
        \"Alice\": \"Dupond\",
    } %}

    {{ people|map((last, first) => \"#{first} #{last}\")|join(', ') }}
    {# outputs Bob Smith, Alice Dupond #}

Note that the arrow function has access to the current context.

Arguments
---------

* ``arrow``: The arrow function
", "@app/vendor/twig/twig/doc/filters/map.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\map.rst");
    }
}
