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

/* @app/vendor/twig/twig/doc/filters/raw.rst */
class __TwigTemplate_149274f2b02607552857df0b45473860aa5e7be64e09b5791c840b63835d8531 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/raw.rst"));

        // line 1
        echo "``raw``
=======

The ``raw`` filter marks the value as being \"safe\", which means that in an
environment with automatic escaping enabled this variable will not be escaped
if ``raw`` is the last filter applied to it:

.. code-block:: twig

    ";
        // line 11
        echo "        ";
        echo (isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 11, $this->source); })());
        echo " ";
        // line 12
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/raw.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  51 => 11,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``raw``
=======

The ``raw`` filter marks the value as being \"safe\", which means that in an
environment with automatic escaping enabled this variable will not be escaped
if ``raw`` is the last filter applied to it:

.. code-block:: twig

    {% autoescape %}
        {{ var|raw }} {# var won't be escaped #}
    {% endautoescape %}
", "@app/vendor/twig/twig/doc/filters/raw.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\raw.rst");
    }
}
