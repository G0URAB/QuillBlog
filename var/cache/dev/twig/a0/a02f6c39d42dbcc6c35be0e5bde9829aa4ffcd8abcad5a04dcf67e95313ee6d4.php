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

/* @app/vendor/twig/twig/doc/filters/column.rst */
class __TwigTemplate_14f3730c9e9e375770170026b18a9d2f54d7f66e354b5083888afee12fc79f20 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/column.rst"));

        // line 1
        echo "``column``
==========

The ``column`` filter returns the values from a single column in the input
array.

.. code-block:: twig

    ";
        // line 9
        $context["items"] = [0 => ["fruit" => "apple"], 1 => ["fruit" => "orange"]];
        // line 10
        echo "
    ";
        // line 11
        $context["fruits"] = twig_array_column((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 11, $this->source); })()), "fruit");
        // line 12
        echo "
    ";
        // line 14
        echo "
.. note::

    Internally, Twig uses the PHP `array_column`_ function.

Arguments
---------

* ``name``: The column name to extract

.. _`array_column`: https://secure.php.net/array_column
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/column.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  57 => 12,  55 => 11,  52 => 10,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``column``
==========

The ``column`` filter returns the values from a single column in the input
array.

.. code-block:: twig

    {% set items = [{ 'fruit' : 'apple'}, {'fruit' : 'orange' }] %}

    {% set fruits = items|column('fruit') %}

    {# fruits now contains ['apple', 'orange'] #}

.. note::

    Internally, Twig uses the PHP `array_column`_ function.

Arguments
---------

* ``name``: The column name to extract

.. _`array_column`: https://secure.php.net/array_column
", "@app/vendor/twig/twig/doc/filters/column.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\column.rst");
    }
}
