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

/* @app/vendor/twig/twig/doc/filters/abs.rst */
class __TwigTemplate_8befe8adbfe81ab84ec1cc670c20f73e5828753aed6764fcfcf77deab5d15b8e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/abs.rst"));

        // line 1
        echo "``abs``
=======

The ``abs`` filter returns the absolute value.

.. code-block:: twig

    ";
        // line 9
        echo "
    ";
        // line 10
        echo twig_escape_filter($this->env, abs((isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 10, $this->source); })())), "html", null, true);
        echo "

    ";
        // line 13
        echo "
.. note::

    Internally, Twig uses the PHP `abs`_ function.

.. _`abs`: https://secure.php.net/abs
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/abs.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  52 => 10,  49 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``abs``
=======

The ``abs`` filter returns the absolute value.

.. code-block:: twig

    {# number = -5 #}

    {{ number|abs }}

    {# outputs 5 #}

.. note::

    Internally, Twig uses the PHP `abs`_ function.

.. _`abs`: https://secure.php.net/abs
", "@app/vendor/twig/twig/doc/filters/abs.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\abs.rst");
    }
}
