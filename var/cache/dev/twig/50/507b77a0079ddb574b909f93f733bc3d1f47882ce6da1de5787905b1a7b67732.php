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

/* @app/vendor/twig/twig/doc/filters/last.rst */
class __TwigTemplate_41f2b7e8e545a209ad66e38dc5a5e09d03a7aff673b6dfaaa1c40730ac8ea0c5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/last.rst"));

        // line 1
        echo "``last``
========

The ``last`` filter returns the last \"element\" of a sequence, a mapping, or
a string:

.. code-block:: twig

    ";
        // line 9
        echo twig_escape_filter($this->env, twig_last($this->env, [0 => 1, 1 => 2, 2 => 3, 3 => 4]), "html", null, true);
        echo "
    ";
        // line 11
        echo "
    ";
        // line 12
        echo twig_escape_filter($this->env, twig_last($this->env, ["a" => 1, "b" => 2, "c" => 3, "d" => 4]), "html", null, true);
        echo "
    ";
        // line 14
        echo "
    ";
        // line 15
        echo twig_escape_filter($this->env, twig_last($this->env, "1234"), "html", null, true);
        echo "
    ";
        // line 17
        echo "
.. note::

    It also works with objects implementing the `Traversable`_ interface.

.. _`Traversable`: https://secure.php.net/manual/en/class.traversable.php
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/last.rst";
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
        return new Source("``last``
========

The ``last`` filter returns the last \"element\" of a sequence, a mapping, or
a string:

.. code-block:: twig

    {{ [1, 2, 3, 4]|last }}
    {# outputs 4 #}

    {{ { a: 1, b: 2, c: 3, d: 4 }|last }}
    {# outputs 4 #}

    {{ '1234'|last }}
    {# outputs 4 #}

.. note::

    It also works with objects implementing the `Traversable`_ interface.

.. _`Traversable`: https://secure.php.net/manual/en/class.traversable.php
", "@app/vendor/twig/twig/doc/filters/last.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\last.rst");
    }
}
