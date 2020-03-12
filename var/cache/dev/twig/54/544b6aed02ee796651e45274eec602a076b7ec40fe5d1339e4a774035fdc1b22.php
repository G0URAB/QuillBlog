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

/* @app/vendor/twig/twig/doc/filters/url_encode.rst */
class __TwigTemplate_34e064890ced94933b6763c5ecd9173d84573ec6f583bc08c7ba2721374f2ccb extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/url_encode.rst"));

        // line 1
        echo "``url_encode``
==============

The ``url_encode`` filter percent encodes a given string as URL segment
or an array as query string:

.. code-block:: twig

    ";
        // line 9
        echo twig_escape_filter($this->env, twig_urlencode_filter("path-seg*ment"), "html", null, true);
        echo "
    ";
        // line 11
        echo "
    ";
        // line 12
        echo twig_escape_filter($this->env, twig_urlencode_filter("string with spaces"), "html", null, true);
        echo "
    ";
        // line 14
        echo "
    ";
        // line 15
        echo twig_escape_filter($this->env, twig_urlencode_filter(["param" => "value", "foo" => "bar"]), "html", null, true);
        echo "
    ";
        // line 17
        echo "
.. note::

    Internally, Twig uses the PHP ``rawurlencode``.

.. _`rawurlencode`: https://secure.php.net/rawurlencode
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/url_encode.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 17,  64 => 15,  61 => 14,  57 => 12,  54 => 11,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``url_encode``
==============

The ``url_encode`` filter percent encodes a given string as URL segment
or an array as query string:

.. code-block:: twig

    {{ \"path-seg*ment\"|url_encode }}
    {# outputs \"path-seg%2Ament\" #}

    {{ \"string with spaces\"|url_encode }}
    {# outputs \"string%20with%20spaces\" #}

    {{ {'param': 'value', 'foo': 'bar'}|url_encode }}
    {# outputs \"param=value&foo=bar\" #}

.. note::

    Internally, Twig uses the PHP ``rawurlencode``.

.. _`rawurlencode`: https://secure.php.net/rawurlencode
", "@app/vendor/twig/twig/doc/filters/url_encode.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\url_encode.rst");
    }
}
