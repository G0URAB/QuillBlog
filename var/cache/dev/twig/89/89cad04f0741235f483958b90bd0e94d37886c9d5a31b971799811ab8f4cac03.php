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

/* @app/vendor/twig/twig/doc/filters/reduce.rst */
class __TwigTemplate_fd03e0761b182ff1b9dfb98b71438d13cdecb417d1405724a4223660d431c764 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/reduce.rst"));

        // line 1
        echo "``reduce``
==========

The ``reduce`` filter iteratively reduces a sequence or a mapping to a single
value using an arrow function, so as to reduce it to a single value. The arrow
function receives the return value of the previous iteration and the current
value of the sequence or mapping:

.. code-block:: twig

    ";
        // line 11
        $context["numbers"] = [0 => 1, 1 => 2, 2 => 3];
        // line 12
        echo "
    ";
        // line 13
        echo twig_escape_filter($this->env, twig_array_reduce((isset($context["numbers"]) || array_key_exists("numbers", $context) ? $context["numbers"] : (function () { throw new RuntimeError('Variable "numbers" does not exist.', 13, $this->source); })()), function ($__carry__, $__v__) use ($context, $macros) { $context["carry"] = $__carry__; $context["v"] = $__v__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 13, $this->source); })()) + (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 13, $this->source); })())); }), "html", null, true);
        echo "
    ";
        // line 15
        echo "
The ``reduce`` filter takes an ``initial`` value as a second argument:

.. code-block:: twig

    ";
        // line 20
        echo twig_escape_filter($this->env, twig_array_reduce((isset($context["numbers"]) || array_key_exists("numbers", $context) ? $context["numbers"] : (function () { throw new RuntimeError('Variable "numbers" does not exist.', 20, $this->source); })()), function ($__carry__, $__v__) use ($context, $macros) { $context["carry"] = $__carry__; $context["v"] = $__v__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 20, $this->source); })()) + (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 20, $this->source); })())); }, 10), "html", null, true);
        echo "
    ";
        // line 22
        echo "
Note that the arrow function has access to the current context.

Arguments
---------

* ``arrow``: The arrow function
* ``initial``: The initial value
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/reduce.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  68 => 20,  61 => 15,  57 => 13,  54 => 12,  52 => 11,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``reduce``
==========

The ``reduce`` filter iteratively reduces a sequence or a mapping to a single
value using an arrow function, so as to reduce it to a single value. The arrow
function receives the return value of the previous iteration and the current
value of the sequence or mapping:

.. code-block:: twig

    {% set numbers = [1, 2, 3] %}

    {{ numbers|reduce((carry, v) => carry + v) }}
    {# output 6 #}

The ``reduce`` filter takes an ``initial`` value as a second argument:

.. code-block:: twig

    {{ numbers|reduce((carry, v) => carry + v, 10) }}
    {# output 16 #}

Note that the arrow function has access to the current context.

Arguments
---------

* ``arrow``: The arrow function
* ``initial``: The initial value
", "@app/vendor/twig/twig/doc/filters/reduce.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\reduce.rst");
    }
}
