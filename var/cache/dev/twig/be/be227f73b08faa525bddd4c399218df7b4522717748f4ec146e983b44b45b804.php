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

/* @app/vendor/twig/twig/doc/tags/if.rst */
class __TwigTemplate_b9bc1102fa7c1e5626feb2ce15753453dde64bf96b49363b876ba347abd067e8 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/tags/if.rst"));

        // line 1
        echo "``if``
======

The ``if`` statement in Twig is comparable with the if statements of PHP.

In the simplest form you can use it to test if an expression evaluates to
``true``:

.. code-block:: twig

    ";
        // line 11
        if (0 === twig_compare((isset($context["online"]) || array_key_exists("online", $context) ? $context["online"] : (function () { throw new RuntimeError('Variable "online" does not exist.', 11, $this->source); })()), false)) {
            // line 12
            echo "        <p>Our website is in maintenance mode. Please, come back later.</p>
    ";
        }
        // line 14
        echo "
You can also test if an array is not empty:

.. code-block:: twig

    ";
        // line 19
        if ((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "        <ul>
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 22
                echo "                <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 22));
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        </ul>
    ";
        }
        // line 26
        echo "
.. note::

    If you want to test if the variable is defined, use ``if users is
    defined`` instead.

You can also use ``not`` to check for values that evaluate to ``false``:

.. code-block:: twig

    ";
        // line 36
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "subscribed", [], "any", false, false, false, 36)) {
            // line 37
            echo "        <p>You are not subscribed to our mailing list.</p>
    ";
        }
        // line 39
        echo "
For multiple conditions, ``and`` and ``or`` can be used:

.. code-block:: twig

    ";
        // line 44
        if ((1 === twig_compare((isset($context["temperature"]) || array_key_exists("temperature", $context) ? $context["temperature"] : (function () { throw new RuntimeError('Variable "temperature" does not exist.', 44, $this->source); })()), 18) && -1 === twig_compare((isset($context["temperature"]) || array_key_exists("temperature", $context) ? $context["temperature"] : (function () { throw new RuntimeError('Variable "temperature" does not exist.', 44, $this->source); })()), 27))) {
            // line 45
            echo "        <p>It's a nice day for a walk in the park.</p>
    ";
        }
        // line 47
        echo "
For multiple branches ``elseif`` and ``else`` can be used like in PHP. You can
use more complex ``expressions`` there too:

.. code-block:: twig

    ";
        // line 53
        if (1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 53, $this->source); })()), "stock", [], "any", false, false, false, 53), 10)) {
            // line 54
            echo "       Available
    ";
        } elseif (1 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 55
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 55, $this->source); })()), "stock", [], "any", false, false, false, 55), 0)) {
            // line 56
            echo "       Only ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 56, $this->source); })()), "stock", [], "any", false, false, false, 56), "html", null, true);
            echo " left!
    ";
        } else {
            // line 58
            echo "       Sold-out!
    ";
        }
        // line 60
        echo "
.. note::

    The rules to determine if an expression is ``true`` or ``false`` are the
    same as in PHP; here are the edge cases rules:

    ====================== ====================
    Value                  Boolean evaluation
    ====================== ====================
    empty string           false
    numeric zero           false
    NAN (Not A Number)     true
    INF (Infinity)         true
    whitespace-only string true
    string \"0\" or '0'      false
    empty array            false
    null                   false
    non-empty array        true
    object                 true
    ====================== ====================
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/tags/if.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 60,  139 => 58,  133 => 56,  131 => 55,  128 => 54,  126 => 53,  118 => 47,  114 => 45,  112 => 44,  105 => 39,  101 => 37,  99 => 36,  87 => 26,  83 => 24,  74 => 22,  70 => 21,  67 => 20,  65 => 19,  58 => 14,  54 => 12,  52 => 11,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``if``
======

The ``if`` statement in Twig is comparable with the if statements of PHP.

In the simplest form you can use it to test if an expression evaluates to
``true``:

.. code-block:: twig

    {% if online == false %}
        <p>Our website is in maintenance mode. Please, come back later.</p>
    {% endif %}

You can also test if an array is not empty:

.. code-block:: twig

    {% if users %}
        <ul>
            {% for user in users %}
                <li>{{ user.username|e }}</li>
            {% endfor %}
        </ul>
    {% endif %}

.. note::

    If you want to test if the variable is defined, use ``if users is
    defined`` instead.

You can also use ``not`` to check for values that evaluate to ``false``:

.. code-block:: twig

    {% if not user.subscribed %}
        <p>You are not subscribed to our mailing list.</p>
    {% endif %}

For multiple conditions, ``and`` and ``or`` can be used:

.. code-block:: twig

    {% if temperature > 18 and temperature < 27 %}
        <p>It's a nice day for a walk in the park.</p>
    {% endif %}

For multiple branches ``elseif`` and ``else`` can be used like in PHP. You can
use more complex ``expressions`` there too:

.. code-block:: twig

    {% if product.stock > 10 %}
       Available
    {% elseif product.stock > 0 %}
       Only {{ product.stock }} left!
    {% else %}
       Sold-out!
    {% endif %}

.. note::

    The rules to determine if an expression is ``true`` or ``false`` are the
    same as in PHP; here are the edge cases rules:

    ====================== ====================
    Value                  Boolean evaluation
    ====================== ====================
    empty string           false
    numeric zero           false
    NAN (Not A Number)     true
    INF (Infinity)         true
    whitespace-only string true
    string \"0\" or '0'      false
    empty array            false
    null                   false
    non-empty array        true
    object                 true
    ====================== ====================
", "@app/vendor/twig/twig/doc/tags/if.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\tags\\if.rst");
    }
}
