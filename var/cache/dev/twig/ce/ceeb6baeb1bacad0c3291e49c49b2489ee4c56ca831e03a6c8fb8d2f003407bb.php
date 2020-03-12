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

/* @app/vendor/twig/twig/doc/filters/convert_encoding.rst */
class __TwigTemplate_eea28118a8a1419d6b1b5bd78304a5af04d5fe86717d691c32e63adeee7ff0a6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/convert_encoding.rst"));

        // line 1
        echo "``convert_encoding``
====================

The ``convert_encoding`` filter converts a string from one encoding to
another. The first argument is the expected output charset and the second one
is the input charset:

.. code-block:: twig

    ";
        // line 10
        echo twig_escape_filter($this->env, twig_convert_encoding((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "UTF-8", "iso-2022-jp"), "html", null, true);
        echo "

.. note::

    This filter relies on the `iconv`_ extension.

Arguments
---------

* ``to``:   The output charset
* ``from``: The input charset

.. _`iconv`: https://secure.php.net/iconv
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/convert_encoding.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``convert_encoding``
====================

The ``convert_encoding`` filter converts a string from one encoding to
another. The first argument is the expected output charset and the second one
is the input charset:

.. code-block:: twig

    {{ data|convert_encoding('UTF-8', 'iso-2022-jp') }}

.. note::

    This filter relies on the `iconv`_ extension.

Arguments
---------

* ``to``:   The output charset
* ``from``: The input charset

.. _`iconv`: https://secure.php.net/iconv
", "@app/vendor/twig/twig/doc/filters/convert_encoding.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\convert_encoding.rst");
    }
}
