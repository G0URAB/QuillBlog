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

/* @app/vendor/twig/twig/doc/tags/autoescape.rst */
class __TwigTemplate_a85495fe1a0e46671dce4bafb2aa11c9cb391bd98d623967c49e7e3f1544c1c5 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/tags/autoescape.rst"));

        // line 1
        echo "``autoescape``
==============

Whether automatic escaping is enabled or not, you can mark a section of a
template to be escaped or not by using the ``autoescape`` tag:

.. code-block:: twig

    ";
        // line 10
        echo "        Everything will be automatically escaped in this block
        using the HTML strategy
    ";
        // line 13
        echo "
    ";
        // line 15
        echo "        Everything will be automatically escaped in this block
        using the HTML strategy
    ";
        // line 18
        echo "
    ";
        // line 20
        echo "        Everything will be automatically escaped in this block
        using the js escaping strategy
    ";
        // line 23
        echo "
    ";
        // line 25
        echo "        Everything will be outputted as is in this block
    ";
        // line 27
        echo "
When automatic escaping is enabled everything is escaped by default except for
values explicitly marked as safe. Those can be marked in the template by using
the :doc:`raw<../filters/raw>` filter:

.. code-block:: twig

    ";
        // line 35
        echo "        ";
        echo (isset($context["safe_value"]) || array_key_exists("safe_value", $context) ? $context["safe_value"] : (function () { throw new RuntimeError('Variable "safe_value" does not exist.', 35, $this->source); })());
        echo "
    ";
        // line 37
        echo "
Functions returning template data (like :doc:`macros<macro>` and
:doc:`parent<../functions/parent>`) always return safe markup.

.. note::

    Twig is smart enough to not escape an already escaped value by the
    :doc:`escape<../filters/escape>` filter.

.. note::

    Twig does not escape static expressions:

    .. code-block:: twig

        ";
        // line 52
        $context["hello"] = "<strong>Hello</strong>";
        // line 53
        echo "        ";
        echo twig_escape_filter($this->env, (isset($context["hello"]) || array_key_exists("hello", $context) ? $context["hello"] : (function () { throw new RuntimeError('Variable "hello" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "
        ";
        // line 54
        echo "<strong>world</strong>";
        echo "

    Will be rendered \"<strong>Hello</strong> **world**\".

.. note::

    The chapter :doc:`Twig for Developers<../api>` gives more information
    about when and how automatic escaping is applied.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/tags/autoescape.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 54,  107 => 53,  105 => 52,  88 => 37,  83 => 35,  74 => 27,  71 => 25,  68 => 23,  64 => 20,  61 => 18,  57 => 15,  54 => 13,  50 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``autoescape``
==============

Whether automatic escaping is enabled or not, you can mark a section of a
template to be escaped or not by using the ``autoescape`` tag:

.. code-block:: twig

    {% autoescape %}
        Everything will be automatically escaped in this block
        using the HTML strategy
    {% endautoescape %}

    {% autoescape 'html' %}
        Everything will be automatically escaped in this block
        using the HTML strategy
    {% endautoescape %}

    {% autoescape 'js' %}
        Everything will be automatically escaped in this block
        using the js escaping strategy
    {% endautoescape %}

    {% autoescape false %}
        Everything will be outputted as is in this block
    {% endautoescape %}

When automatic escaping is enabled everything is escaped by default except for
values explicitly marked as safe. Those can be marked in the template by using
the :doc:`raw<../filters/raw>` filter:

.. code-block:: twig

    {% autoescape %}
        {{ safe_value|raw }}
    {% endautoescape %}

Functions returning template data (like :doc:`macros<macro>` and
:doc:`parent<../functions/parent>`) always return safe markup.

.. note::

    Twig is smart enough to not escape an already escaped value by the
    :doc:`escape<../filters/escape>` filter.

.. note::

    Twig does not escape static expressions:

    .. code-block:: twig

        {% set hello = \"<strong>Hello</strong>\" %}
        {{ hello }}
        {{ \"<strong>world</strong>\" }}

    Will be rendered \"<strong>Hello</strong> **world**\".

.. note::

    The chapter :doc:`Twig for Developers<../api>` gives more information
    about when and how automatic escaping is applied.
", "@app/vendor/twig/twig/doc/tags/autoescape.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\tags\\autoescape.rst");
    }
}
