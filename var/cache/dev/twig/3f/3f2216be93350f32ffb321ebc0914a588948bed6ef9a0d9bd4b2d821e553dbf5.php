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

/* @app/vendor/twig/twig/doc/filters/batch.rst */
class __TwigTemplate_4d68d18d12417d22aa86ffddb04cc40d92aac428ceb7ac05d8ac6f637149a082 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/batch.rst"));

        // line 1
        echo "``batch``
=========

The ``batch`` filter \"batches\" items by returning a list of lists with the
given number of items. A second parameter can be provided and used to fill in
missing items:

.. code-block:: twig

    ";
        // line 10
        $context["items"] = [0 => "a", 1 => "b", 2 => "c", 3 => "d", 4 => "e", 5 => "f", 6 => "g"];
        // line 11
        echo "
    <table>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 13, $this->source); })()), 3, "No item"));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 14
            echo "        <tr>
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 16
                echo "                <td>";
                echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </table>

The above example will be rendered as:

.. code-block:: twig

    <table>
        <tr>
            <td>a</td>
            <td>b</td>
            <td>c</td>
        </tr>
        <tr>
            <td>d</td>
            <td>e</td>
            <td>f</td>
        </tr>
        <tr>
            <td>g</td>
            <td>No item</td>
            <td>No item</td>
        </tr>
    </table>

Arguments
---------

* ``size``: The size of the batch; fractional numbers will be rounded up
* ``fill``: Used to fill in missing items
* ``preserve_keys``: Whether to preserve keys or not
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/batch.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  77 => 18,  68 => 16,  64 => 15,  61 => 14,  57 => 13,  53 => 11,  51 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``batch``
=========

The ``batch`` filter \"batches\" items by returning a list of lists with the
given number of items. A second parameter can be provided and used to fill in
missing items:

.. code-block:: twig

    {% set items = ['a', 'b', 'c', 'd', 'e', 'f', 'g'] %}

    <table>
    {% for row in items|batch(3, 'No item') %}
        <tr>
            {% for column in row %}
                <td>{{ column }}</td>
            {% endfor %}
        </tr>
    {% endfor %}
    </table>

The above example will be rendered as:

.. code-block:: twig

    <table>
        <tr>
            <td>a</td>
            <td>b</td>
            <td>c</td>
        </tr>
        <tr>
            <td>d</td>
            <td>e</td>
            <td>f</td>
        </tr>
        <tr>
            <td>g</td>
            <td>No item</td>
            <td>No item</td>
        </tr>
    </table>

Arguments
---------

* ``size``: The size of the batch; fractional numbers will be rounded up
* ``fill``: Used to fill in missing items
* ``preserve_keys``: Whether to preserve keys or not
", "@app/vendor/twig/twig/doc/filters/batch.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\batch.rst");
    }
}
