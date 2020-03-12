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

/* @app/vendor/twig/twig/doc/filters/filter.rst */
class __TwigTemplate_8fb1c8bf1c25b86b0c2afbae3f2927c0656af7532f78fac94eac2e0e63b8545f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/filter.rst"));

        // line 1
        echo "``filter``
==========

The ``filter`` filter filters elements of a sequence or a mapping using an arrow
function. The arrow function receives the value of the sequence or mapping:

.. code-block:: twig

    ";
        // line 9
        $context["sizes"] = [0 => 34, 1 => 36, 2 => 38, 3 => 40, 4 => 42];
        // line 10
        echo "
    ";
        // line 11
        echo twig_escape_filter($this->env, twig_join_filter(twig_array_filter((isset($context["sizes"]) || array_key_exists("sizes", $context) ? $context["sizes"] : (function () { throw new RuntimeError('Variable "sizes" does not exist.', 11, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return 1 === twig_compare((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 11, $this->source); })()), 38); }), ", "), "html", null, true);
        echo "
    ";
        // line 13
        echo "
Combined with the ``for`` tag, it allows to filter the items to iterate over:

.. code-block:: twig

    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["sizes"]) || array_key_exists("sizes", $context) ? $context["sizes"] : (function () { throw new RuntimeError('Variable "sizes" does not exist.', 18, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return 1 === twig_compare($context["v"], 38); }));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 19
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    ";
        // line 22
        echo "
It also works with mappings:

.. code-block:: twig

    ";
        // line 27
        $context["sizes"] = ["xs" => 34, "s" => 36, "m" => 38, "l" => 40, "xl" => 42];
        // line 34
        echo "
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["sizes"]) || array_key_exists("sizes", $context) ? $context["sizes"] : (function () { throw new RuntimeError('Variable "sizes" does not exist.', 35, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return 1 === twig_compare($context["v"], 38); }));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 36
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo " = ";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    ";
        // line 39
        echo "
The arrow function also receives the key as a second argument:

.. code-block:: twig

    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter((isset($context["sizes"]) || array_key_exists("sizes", $context) ? $context["sizes"] : (function () { throw new RuntimeError('Variable "sizes" does not exist.', 44, $this->source); })()), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return (1 === twig_compare($context["v"], 38) && 0 !== twig_compare($context["k"], "xl")); }));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 45
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo " = ";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    ";
        // line 48
        echo "
Note that the arrow function has access to the current context.

Arguments
---------

* ``array``: The sequence or mapping
* ``arrow``: The arrow function
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/filter.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 48,  129 => 47,  119 => 45,  115 => 44,  108 => 39,  106 => 38,  96 => 36,  92 => 35,  89 => 34,  87 => 27,  80 => 22,  78 => 21,  70 => 19,  66 => 18,  59 => 13,  55 => 11,  52 => 10,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``filter``
==========

The ``filter`` filter filters elements of a sequence or a mapping using an arrow
function. The arrow function receives the value of the sequence or mapping:

.. code-block:: twig

    {% set sizes = [34, 36, 38, 40, 42] %}

    {{ sizes|filter(v => v > 38)|join(', ') }}
    {# output 40, 42 #}

Combined with the ``for`` tag, it allows to filter the items to iterate over:

.. code-block:: twig

    {% for v in sizes|filter(v => v > 38) -%}
        {{ v }}
    {% endfor %}
    {# output 40 42 #}

It also works with mappings:

.. code-block:: twig

    {% set sizes = {
        xs: 34,
        s:  36,
        m:  38,
        l:  40,
        xl: 42,
    } %}

    {% for k, v in sizes|filter(v => v > 38) -%}
        {{ k }} = {{ v }}
    {% endfor %}
    {# output l = 40 xl = 42 #}

The arrow function also receives the key as a second argument:

.. code-block:: twig

    {% for k, v in sizes|filter((v, k) => v > 38 and k != \"xl\") -%}
        {{ k }} = {{ v }}
    {% endfor %}
    {# output l = 40 #}

Note that the arrow function has access to the current context.

Arguments
---------

* ``array``: The sequence or mapping
* ``arrow``: The arrow function
", "@app/vendor/twig/twig/doc/filters/filter.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\filter.rst");
    }
}
