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

/* @app/vendor/twig/twig/doc/tests/odd.rst */
class __TwigTemplate_2f0bfbb72883ceefe02ea9967acf53350fa33200644920a09b36850bfdf20c13 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/tests/odd.rst"));

        // line 1
        echo "``odd``
=======

``odd`` returns ``true`` if the given number is odd:

.. code-block:: twig

    ";
        // line 8
        echo twig_escape_filter($this->env, ((isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 8, $this->source); })()) % 2 == 1), "html", null, true);
        echo "

.. seealso:: :doc:`even<../tests/even>`
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/tests/odd.rst";
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
        return new Source("``odd``
=======

``odd`` returns ``true`` if the given number is odd:

.. code-block:: twig

    {{ var is odd }}

.. seealso:: :doc:`even<../tests/even>`
", "@app/vendor/twig/twig/doc/tests/odd.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\tests\\odd.rst");
    }
}
