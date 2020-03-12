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

/* @app/vendor/twig/twig/doc/tags/verbatim.rst */
class __TwigTemplate_1edb8d84622d031f9d790fedd6c54d15089eb79819e31de3186484dcb78695ff extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/tags/verbatim.rst"));

        // line 1
        echo "``verbatim``
============

The ``verbatim`` tag marks sections as being raw text that should not be
parsed. For example to put Twig syntax as example into a template you can use
this snippet:

.. code-block:: twig

    ";
        // line 16
        echo "
        <ul>
        {% for item in seq %}
            <li>{{ item }}</li>
        {% endfor %}
        </ul>
    ";
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/tags/verbatim.rst";
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``verbatim``
============

The ``verbatim`` tag marks sections as being raw text that should not be
parsed. For example to put Twig syntax as example into a template you can use
this snippet:

.. code-block:: twig

    {% verbatim %}
        <ul>
        {% for item in seq %}
            <li>{{ item }}</li>
        {% endfor %}
        </ul>
    {% endverbatim %}
", "@app/vendor/twig/twig/doc/tags/verbatim.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\tags\\verbatim.rst");
    }
}
