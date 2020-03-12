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

/* @app/vendor/twig/twig/doc/filters/round.rst */
class __TwigTemplate_fcd35d24c3ec96e4b1d23ca08cc1abd88461b7efd49960f7f0d517af15637f68 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/round.rst"));

        // line 1
        echo "``round``
=========

The ``round`` filter rounds a number to a given precision:

.. code-block:: twig

    ";
        // line 8
        echo twig_escape_filter($this->env, twig_round(42.55), "html", null, true);
        echo "
    ";
        // line 10
        echo "
    ";
        // line 11
        echo twig_escape_filter($this->env, twig_round(42.55, 1, "floor"), "html", null, true);
        echo "
    ";
        // line 13
        echo "
The ``round`` filter takes two optional arguments; the first one specifies the
precision (default is ``0``) and the second the rounding method (default is
``common``):

* ``common`` rounds either up or down (rounds the value up to precision decimal
  places away from zero, when it is half way there -- making 1.5 into 2 and
  -1.5 into -2);

* ``ceil`` always rounds up;

* ``floor`` always rounds down.

.. note::

    The ``//`` operator is equivalent to ``|round(0, 'floor')``.

Arguments
---------

* ``precision``: The rounding precision
* ``method``: The rounding method
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/round.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  56 => 11,  53 => 10,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``round``
=========

The ``round`` filter rounds a number to a given precision:

.. code-block:: twig

    {{ 42.55|round }}
    {# outputs 43 #}

    {{ 42.55|round(1, 'floor') }}
    {# outputs 42.5 #}

The ``round`` filter takes two optional arguments; the first one specifies the
precision (default is ``0``) and the second the rounding method (default is
``common``):

* ``common`` rounds either up or down (rounds the value up to precision decimal
  places away from zero, when it is half way there -- making 1.5 into 2 and
  -1.5 into -2);

* ``ceil`` always rounds up;

* ``floor`` always rounds down.

.. note::

    The ``//`` operator is equivalent to ``|round(0, 'floor')``.

Arguments
---------

* ``precision``: The rounding precision
* ``method``: The rounding method
", "@app/vendor/twig/twig/doc/filters/round.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\round.rst");
    }
}
