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

/* @app/vendor/twig/twig/doc/filters/format.rst */
class __TwigTemplate_5548a702db3ed22b73c1524fd3a2f01740d2e780bbad8bb4be153105bb2e199c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/format.rst"));

        // line 1
        echo "``format``
==========

The ``format`` filter formats a given string by replacing the placeholders
(placeholders follows the `sprintf`_ notation):

.. code-block:: twig

    ";
        // line 9
        echo twig_escape_filter($this->env, sprintf("I like %s and %s.", (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 9, $this->source); })()), "bar"), "html", null, true);
        echo "

    ";
        // line 13
        echo "
.. _`sprintf`: https://secure.php.net/sprintf

.. seealso:: :doc:`replace<replace>`
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/format.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``format``
==========

The ``format`` filter formats a given string by replacing the placeholders
(placeholders follows the `sprintf`_ notation):

.. code-block:: twig

    {{ \"I like %s and %s.\"|format(foo, \"bar\") }}

    {# outputs I like foo and bar
       if the foo parameter equals to the foo string. #}

.. _`sprintf`: https://secure.php.net/sprintf

.. seealso:: :doc:`replace<replace>`
", "@app/vendor/twig/twig/doc/filters/format.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\format.rst");
    }
}
