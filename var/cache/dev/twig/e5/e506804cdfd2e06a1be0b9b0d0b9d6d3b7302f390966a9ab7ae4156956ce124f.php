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

/* @app/vendor/twig/twig/doc/filters/slice.rst */
class __TwigTemplate_fededf93befbff6f9e9e637bcbf20ea5b8b1276fef8ca3eff23df47c36ec44e1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/slice.rst"));

        // line 1
        echo "``slice``
===========

The ``slice`` filter extracts a slice of a sequence, a mapping, or a string:

.. code-block:: twig

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, [0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5], 1, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 9
            echo "        ";
            // line 10
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
    ";
        // line 12
        echo twig_escape_filter($this->env, twig_slice($this->env, "12345", 1, 2), "html", null, true);
        echo "

    ";
        // line 15
        echo "
You can use any valid expression for both the start and the length:

.. code-block:: twig

    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, [0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5], (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 20, $this->source); })()), (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 20, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 21
            echo "        ";
            // line 22
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
As syntactic sugar, you can also use the ``[]`` notation:

.. code-block:: twig

    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, [0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5], (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 28, $this->source); })()), (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new RuntimeError('Variable "length" does not exist.', 28, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 29
            echo "        ";
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    ";
        // line 32
        echo twig_escape_filter($this->env, twig_slice($this->env, "12345", 1, 2), "html", null, true);
        echo " ";
        // line 33
        echo "
    ";
        // line 35
        echo "    ";
        echo twig_escape_filter($this->env, twig_slice($this->env, "12345", 0, 2), "html", null, true);
        echo " ";
        // line 36
        echo "
    ";
        // line 38
        echo "    ";
        echo twig_escape_filter($this->env, twig_slice($this->env, "12345", 2, null), "html", null, true);
        echo " ";
        // line 39
        echo "
The ``slice`` filter works as the `array_slice`_ PHP function for arrays and
`mb_substr`_ for strings with a fallback to `substr`_.

If the start is non-negative, the sequence will start at that start in the
variable. If start is negative, the sequence will start that far from the end
of the variable.

If length is given and is positive, then the sequence will have up to that
many elements in it. If the variable is shorter than the length, then only the
available variable elements will be present. If length is given and is
negative then the sequence will stop that many elements from the end of the
variable. If it is omitted, then the sequence will have everything from offset
up until the end of the variable.

.. note::

    It also works with objects implementing the `Traversable`_ interface.

Arguments
---------

* ``start``:         The start of the slice
* ``length``:        The size of the slice
* ``preserve_keys``: Whether to preserve key or not (when the input is an array)

.. _`Traversable`: https://secure.php.net/manual/en/class.traversable.php
.. _`array_slice`: https://secure.php.net/array_slice
.. _`mb_substr` :  https://secure.php.net/mb-substr
.. _`substr`:      https://secure.php.net/substr
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/slice.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 39,  123 => 38,  120 => 36,  116 => 35,  113 => 33,  110 => 32,  107 => 31,  101 => 30,  99 => 29,  95 => 28,  88 => 23,  82 => 22,  80 => 21,  76 => 20,  69 => 15,  64 => 12,  61 => 11,  55 => 10,  53 => 9,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``slice``
===========

The ``slice`` filter extracts a slice of a sequence, a mapping, or a string:

.. code-block:: twig

    {% for i in [1, 2, 3, 4, 5]|slice(1, 2) %}
        {# will iterate over 2 and 3 #}
    {% endfor %}

    {{ '12345'|slice(1, 2) }}

    {# outputs 23 #}

You can use any valid expression for both the start and the length:

.. code-block:: twig

    {% for i in [1, 2, 3, 4, 5]|slice(start, length) %}
        {# ... #}
    {% endfor %}

As syntactic sugar, you can also use the ``[]`` notation:

.. code-block:: twig

    {% for i in [1, 2, 3, 4, 5][start:length] %}
        {# ... #}
    {% endfor %}

    {{ '12345'[1:2] }} {# will display \"23\" #}

    {# you can omit the first argument -- which is the same as 0 #}
    {{ '12345'[:2] }} {# will display \"12\" #}

    {# you can omit the last argument -- which will select everything till the end #}
    {{ '12345'[2:] }} {# will display \"345\" #}

The ``slice`` filter works as the `array_slice`_ PHP function for arrays and
`mb_substr`_ for strings with a fallback to `substr`_.

If the start is non-negative, the sequence will start at that start in the
variable. If start is negative, the sequence will start that far from the end
of the variable.

If length is given and is positive, then the sequence will have up to that
many elements in it. If the variable is shorter than the length, then only the
available variable elements will be present. If length is given and is
negative then the sequence will stop that many elements from the end of the
variable. If it is omitted, then the sequence will have everything from offset
up until the end of the variable.

.. note::

    It also works with objects implementing the `Traversable`_ interface.

Arguments
---------

* ``start``:         The start of the slice
* ``length``:        The size of the slice
* ``preserve_keys``: Whether to preserve key or not (when the input is an array)

.. _`Traversable`: https://secure.php.net/manual/en/class.traversable.php
.. _`array_slice`: https://secure.php.net/array_slice
.. _`mb_substr` :  https://secure.php.net/mb-substr
.. _`substr`:      https://secure.php.net/substr
", "@app/vendor/twig/twig/doc/filters/slice.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\slice.rst");
    }
}
