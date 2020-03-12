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

/* @app/vendor/twig/twig/doc/functions/max.rst */
class __TwigTemplate_df6c5679de624fc4328b16eed9a5df77ccf80f645fc403d72e5c6af53177d31c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/functions/max.rst"));

        // line 1
        echo "``max``
=======

``max`` returns the biggest value of a sequence or a set of values:

.. code-block:: twig

    ";
        // line 8
        echo twig_escape_filter($this->env, max(1, 3, 2), "html", null, true);
        echo "
    ";
        // line 9
        echo twig_escape_filter($this->env, max([0 => 1, 1 => 3, 2 => 2]), "html", null, true);
        echo "

When called with a mapping, max ignores keys and only compares values:

.. code-block:: twig

    ";
        // line 15
        echo twig_escape_filter($this->env, max([2 => "e", 1 => "a", 3 => "b", 5 => "d", 4 => "c"]), "html", null, true);
        echo "
    ";
        // line 17
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/functions/max.rst";
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
        return new Source("``max``
=======

``max`` returns the biggest value of a sequence or a set of values:

.. code-block:: twig

    {{ max(1, 3, 2) }}
    {{ max([1, 3, 2]) }}

When called with a mapping, max ignores keys and only compares values:

.. code-block:: twig

    {{ max({2: \"e\", 1: \"a\", 3: \"b\", 5: \"d\", 4: \"c\"}) }}
    {# returns \"e\" #}

", "@app/vendor/twig/twig/doc/functions/max.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\functions\\max.rst");
    }
}
