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

/* @app/vendor/twig/twig/doc/filters/merge.rst */
class __TwigTemplate_e13252161339319c67e3456fd5a6975c4ebab680387d1ab0bc33a58b5d9278b3 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/merge.rst"));

        // line 1
        echo "``merge``
=========

The ``merge`` filter merges an array with another array:

.. code-block:: twig

    ";
        // line 8
        $context["values"] = [0 => 1, 1 => 2];
        // line 9
        echo "
    ";
        // line 10
        $context["values"] = twig_array_merge((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 10, $this->source); })()), [0 => "apple", 1 => "orange"]);
        // line 11
        echo "
    ";
        // line 13
        echo "
New values are added at the end of the existing ones.

The ``merge`` filter also works on hashes:

.. code-block:: twig

    ";
        // line 20
        $context["items"] = ["apple" => "fruit", "orange" => "fruit", "peugeot" => "unknown"];
        // line 21
        echo "
    ";
        // line 22
        $context["items"] = twig_array_merge((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 22, $this->source); })()), ["peugeot" => "car", "renault" => "car"]);
        // line 23
        echo "
    ";
        // line 25
        echo "
For hashes, the merging process occurs on the keys: if the key does not
already exist, it is added but if the key already exists, its value is
overridden.

.. tip::

    If you want to ensure that some values are defined in an array (by given
    default values), reverse the two elements in the call:

    .. code-block:: twig

        ";
        // line 37
        $context["items"] = ["apple" => "fruit", "orange" => "fruit"];
        // line 38
        echo "
        ";
        // line 39
        $context["items"] = twig_array_merge(["apple" => "unknown"], (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 39, $this->source); })()));
        // line 40
        echo "
        ";
        // line 42
        echo "        
.. note::

    Internally, Twig uses the PHP `array_merge`_ function. It supports
    Traversable objects by transforming those to arrays.

.. _`array_merge`: https://secure.php.net/array_merge
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/merge.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 42,  99 => 40,  97 => 39,  94 => 38,  92 => 37,  78 => 25,  75 => 23,  73 => 22,  70 => 21,  68 => 20,  59 => 13,  56 => 11,  54 => 10,  51 => 9,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``merge``
=========

The ``merge`` filter merges an array with another array:

.. code-block:: twig

    {% set values = [1, 2] %}

    {% set values = values|merge(['apple', 'orange']) %}

    {# values now contains [1, 2, 'apple', 'orange'] #}

New values are added at the end of the existing ones.

The ``merge`` filter also works on hashes:

.. code-block:: twig

    {% set items = { 'apple': 'fruit', 'orange': 'fruit', 'peugeot': 'unknown' } %}

    {% set items = items|merge({ 'peugeot': 'car', 'renault': 'car' }) %}

    {# items now contains { 'apple': 'fruit', 'orange': 'fruit', 'peugeot': 'car', 'renault': 'car' } #}

For hashes, the merging process occurs on the keys: if the key does not
already exist, it is added but if the key already exists, its value is
overridden.

.. tip::

    If you want to ensure that some values are defined in an array (by given
    default values), reverse the two elements in the call:

    .. code-block:: twig

        {% set items = { 'apple': 'fruit', 'orange': 'fruit' } %}

        {% set items = { 'apple': 'unknown' }|merge(items) %}

        {# items now contains { 'apple': 'fruit', 'orange': 'fruit' } #}
        
.. note::

    Internally, Twig uses the PHP `array_merge`_ function. It supports
    Traversable objects by transforming those to arrays.

.. _`array_merge`: https://secure.php.net/array_merge
", "@app/vendor/twig/twig/doc/filters/merge.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\merge.rst");
    }
}
