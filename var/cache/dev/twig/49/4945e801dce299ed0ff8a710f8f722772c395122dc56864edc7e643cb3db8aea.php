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

/* @app/vendor/twig/twig/doc/filters/split.rst */
class __TwigTemplate_81339451bcf9a924aa7033a5b59dac03f803f831540846f83d67ef4ce450ec13 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/split.rst"));

        // line 1
        echo "``split``
=========

The ``split`` filter splits a string by the given delimiter and returns a list
of strings:

.. code-block:: twig

    ";
        // line 9
        $context["foo"] = twig_split_filter($this->env, "one,two,three", ",");
        // line 10
        echo "    ";
        // line 11
        echo "
You can also pass a ``limit`` argument:

* If ``limit`` is positive, the returned array will contain a maximum of
  limit elements with the last element containing the rest of string;

* If ``limit`` is negative, all components except the last -limit are
  returned;

* If ``limit`` is zero, then this is treated as 1.

.. code-block:: twig

    ";
        // line 24
        $context["foo"] = twig_split_filter($this->env, "one,two,three,four,five", ",", 3);
        // line 25
        echo "    ";
        // line 26
        echo "
If the ``delimiter`` is an empty string, then value will be split by equal
chunks. Length is set by the ``limit`` argument (one character by default).

.. code-block:: twig

    ";
        // line 32
        $context["foo"] = twig_split_filter($this->env, "123", "");
        // line 33
        echo "    ";
        // line 34
        echo "
    ";
        // line 35
        $context["bar"] = twig_split_filter($this->env, "aabbcc", "", 2);
        // line 36
        echo "    ";
        // line 37
        echo "
.. note::

    Internally, Twig uses the PHP `explode`_ or `str_split`_ (if delimiter is
    empty) functions for string splitting.

Arguments
---------

* ``delimiter``: The delimiter
* ``limit``:     The limit argument

.. _`explode`:   https://secure.php.net/explode
.. _`str_split`: https://secure.php.net/str_split
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/split.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 37,  90 => 36,  88 => 35,  85 => 34,  83 => 33,  81 => 32,  73 => 26,  71 => 25,  69 => 24,  54 => 11,  52 => 10,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``split``
=========

The ``split`` filter splits a string by the given delimiter and returns a list
of strings:

.. code-block:: twig

    {% set foo = \"one,two,three\"|split(',') %}
    {# foo contains ['one', 'two', 'three'] #}

You can also pass a ``limit`` argument:

* If ``limit`` is positive, the returned array will contain a maximum of
  limit elements with the last element containing the rest of string;

* If ``limit`` is negative, all components except the last -limit are
  returned;

* If ``limit`` is zero, then this is treated as 1.

.. code-block:: twig

    {% set foo = \"one,two,three,four,five\"|split(',', 3) %}
    {# foo contains ['one', 'two', 'three,four,five'] #}

If the ``delimiter`` is an empty string, then value will be split by equal
chunks. Length is set by the ``limit`` argument (one character by default).

.. code-block:: twig

    {% set foo = \"123\"|split('') %}
    {# foo contains ['1', '2', '3'] #}

    {% set bar = \"aabbcc\"|split('', 2) %}
    {# bar contains ['aa', 'bb', 'cc'] #}

.. note::

    Internally, Twig uses the PHP `explode`_ or `str_split`_ (if delimiter is
    empty) functions for string splitting.

Arguments
---------

* ``delimiter``: The delimiter
* ``limit``:     The limit argument

.. _`explode`:   https://secure.php.net/explode
.. _`str_split`: https://secure.php.net/str_split
", "@app/vendor/twig/twig/doc/filters/split.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\split.rst");
    }
}
