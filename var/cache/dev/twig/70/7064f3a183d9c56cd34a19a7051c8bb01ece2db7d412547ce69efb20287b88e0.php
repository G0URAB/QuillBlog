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

/* @app/vendor/twig/twig/doc/functions/block.rst */
class __TwigTemplate_19beb67f18e6f57d036bce280d7480835dca70947bdc403cdc6ea6bcecd59e70 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/functions/block.rst"));

        // line 1
        echo "``block``
=========

When a template uses inheritance and if you want to print a block multiple
times, use the ``block`` function:

.. code-block:: twig

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <h1>";
        // line 11
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>

    ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "
The ``block`` function can also be used to display one block from another
template:

.. code-block:: twig

    ";
        // line 20
        $this->loadTemplate("common_blocks.twig", "@app/vendor/twig/twig/doc/functions/block.rst", 20)->displayBlock("title", $context);
        echo "

Use the ``defined`` test to check if a block exists in the context of the
current template:

.. code-block:: twig

    ";
        // line 27
        if (        $this->hasBlock("footer", $context, $blocks)) {
            // line 28
            echo "        ...
    ";
        }
        // line 30
        echo "
    ";
        // line 31
        if (        $this->loadTemplate("common_blocks.twig", "@app/vendor/twig/twig/doc/functions/block.rst", 31)->hasBlock("footer", $context)) {
            // line 32
            echo "        ...
    ";
        }
        // line 34
        echo "
.. seealso:: :doc:`extends<../tags/extends>`, :doc:`parent<../functions/parent>`
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/functions/block.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 13,  106 => 9,  97 => 34,  93 => 32,  91 => 31,  88 => 30,  84 => 28,  82 => 27,  72 => 20,  64 => 14,  62 => 13,  57 => 11,  52 => 9,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``block``
=========

When a template uses inheritance and if you want to print a block multiple
times, use the ``block`` function:

.. code-block:: twig

    <title>{% block title %}{% endblock %}</title>

    <h1>{{ block('title') }}</h1>

    {% block body %}{% endblock %}

The ``block`` function can also be used to display one block from another
template:

.. code-block:: twig

    {{ block(\"title\", \"common_blocks.twig\") }}

Use the ``defined`` test to check if a block exists in the context of the
current template:

.. code-block:: twig

    {% if block(\"footer\") is defined %}
        ...
    {% endif %}

    {% if block(\"footer\", \"common_blocks.twig\") is defined %}
        ...
    {% endif %}

.. seealso:: :doc:`extends<../tags/extends>`, :doc:`parent<../functions/parent>`
", "@app/vendor/twig/twig/doc/functions/block.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\functions\\block.rst");
    }
}
