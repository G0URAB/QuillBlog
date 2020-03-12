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

/* @app/vendor/twig/twig/doc/tests/null.rst */
class __TwigTemplate_5350c50adf1921981beacfb2ce16f773e65e29e67fa338d3996d46abf214f4b9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/tests/null.rst"));

        // line 1
        echo "``null``
========

``null`` returns ``true`` if the variable is ``null``:

.. code-block:: twig

    ";
        // line 8
        echo twig_escape_filter($this->env, (null === (isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 8, $this->source); })())), "html", null, true);
        echo "

.. note::

    ``none`` is an alias for ``null``.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/tests/null.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``null``
========

``null`` returns ``true`` if the variable is ``null``:

.. code-block:: twig

    {{ var is null }}

.. note::

    ``none`` is an alias for ``null``.
", "@app/vendor/twig/twig/doc/tests/null.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\tests\\null.rst");
    }
}
