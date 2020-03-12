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

/* @app/vendor/twig/twig/doc/filters/json_encode.rst */
class __TwigTemplate_74c343f20147c5cee6e482f2368fffc61c1f69cfb93f2cdf9f9ea4273d309032 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/json_encode.rst"));

        // line 1
        echo "``json_encode``
===============

The ``json_encode`` filter returns the JSON representation of a value:

.. code-block:: twig

    ";
        // line 8
        echo twig_escape_filter($this->env, json_encode((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })())), "html", null, true);
        echo "

.. note::

    Internally, Twig uses the PHP `json_encode`_ function.

Arguments
---------

* ``options``: A bitmask of `json_encode options`_: ``";
        // line 17
        echo twig_escape_filter($this->env, json_encode(        // line 18
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), twig_constant("JSON_PRETTY_PRINT")), "html", null, true);
        echo "``.
  Combine constants using :ref:`bitwise operators<template_logic>`:
  ``";
        // line 20
        echo twig_escape_filter($this->env, json_encode((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), (twig_constant("JSON_PRETTY_PRINT") | twig_constant("JSON_HEX_QUOT"))), "html", null, true);
        echo "``

.. _`json_encode`: https://secure.php.net/json_encode
.. _`json_encode options`: https://secure.php.net/manual/en/json.constants.php
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/json_encode.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  62 => 18,  61 => 17,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``json_encode``
===============

The ``json_encode`` filter returns the JSON representation of a value:

.. code-block:: twig

    {{ data|json_encode() }}

.. note::

    Internally, Twig uses the PHP `json_encode`_ function.

Arguments
---------

* ``options``: A bitmask of `json_encode options`_: ``{{
  data|json_encode(constant('JSON_PRETTY_PRINT')) }}``.
  Combine constants using :ref:`bitwise operators<template_logic>`:
  ``{{ data|json_encode(constant('JSON_PRETTY_PRINT') b-or constant('JSON_HEX_QUOT')) }}``

.. _`json_encode`: https://secure.php.net/json_encode
.. _`json_encode options`: https://secure.php.net/manual/en/json.constants.php
", "@app/vendor/twig/twig/doc/filters/json_encode.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\json_encode.rst");
    }
}
