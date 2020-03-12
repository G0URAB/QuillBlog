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

/* @app/vendor/twig/twig/doc/functions/min.rst */
class __TwigTemplate_62d1e41592eff6f1e5a4d498b86a3c7f946110f5392d4f55ba963ae0cfe9da2a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/functions/min.rst"));

        // line 1
        echo "``min``
=======

``min`` returns the lowest value of a sequence or a set of values:

.. code-block:: twig

    ";
        // line 8
        echo twig_escape_filter($this->env, min(1, 3, 2), "html", null, true);
        echo "
    ";
        // line 9
        echo twig_escape_filter($this->env, min([0 => 1, 1 => 3, 2 => 2]), "html", null, true);
        echo "

When called with a mapping, min ignores keys and only compares values:

.. code-block:: twig

    ";
        // line 15
        echo twig_escape_filter($this->env, min([2 => "e", 3 => "a", 1 => "b", 5 => "d", 4 => "c"]), "html", null, true);
        echo "
    ";
        // line 17
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/functions/min.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  62 => 15,  53 => 9,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``min``
=======

``min`` returns the lowest value of a sequence or a set of values:

.. code-block:: twig

    {{ min(1, 3, 2) }}
    {{ min([1, 3, 2]) }}

When called with a mapping, min ignores keys and only compares values:

.. code-block:: twig

    {{ min({2: \"e\", 3: \"a\", 1: \"b\", 5: \"d\", 4: \"c\"}) }}
    {# returns \"a\" #}

", "@app/vendor/twig/twig/doc/functions/min.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\functions\\min.rst");
    }
}
