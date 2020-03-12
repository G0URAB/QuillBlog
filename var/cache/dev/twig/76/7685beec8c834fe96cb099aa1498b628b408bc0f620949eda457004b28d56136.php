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

/* @app/vendor/twig/twig/doc/filters/number_format.rst */
class __TwigTemplate_b237ee086fa195f14ac95aea75ce24d2b7e6ee85a9fd7f526e153a00c62dca9c extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/number_format.rst"));

        // line 1
        echo "``number_format``
=================

The ``number_format`` filter formats numbers.  It is a wrapper around PHP's
`number_format`_ function:

.. code-block:: twig

    ";
        // line 9
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 200.35), "html", null, true);
        echo "

You can control the number of decimal places, decimal point, and thousands
separator using the additional arguments:

.. code-block:: twig

    ";
        // line 16
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, 9800.333, 2, ".", ","), "html", null, true);
        echo "

To format negative numbers or math calculation, wrap the previous statement
with parentheses (needed because of Twig's :ref:`precedence of operators
<twig-expressions>`):

.. code-block:: twig

    ";
        // line 24
        echo twig_escape_filter($this->env,  -twig_number_format_filter($this->env, 9800.333, 2, ".", ","), "html", null, true);
        echo " ";
        // line 25
        echo "    ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env,  -9800.333, 2, ".", ","), "html", null, true);
        echo " ";
        // line 26
        echo "    ";
        echo twig_escape_filter($this->env, (1 + twig_number_format_filter($this->env, 0.2, 2)), "html", null, true);
        echo " ";
        // line 27
        echo "    ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (1 + 0.2), 2), "html", null, true);
        echo " ";
        // line 28
        echo "
If no formatting options are provided then Twig will use the default formatting
options of:

* 0 decimal places.
* ``.`` as the decimal point.
* ``,`` as the thousands separator.

These defaults can be changed through the core extension:

.. code-block:: php

    \$twig = new \\Twig\\Environment(\$loader);
    \$twig->getExtension(\\Twig\\Extension\\CoreExtension::class)->setNumberFormat(3, '.', ',');

The defaults set for ``number_format`` can be over-ridden upon each call using the
additional parameters.

Arguments
---------

* ``decimal``:       The number of decimal points to display
* ``decimal_point``: The character(s) to use for the decimal point
* ``thousand_sep``:   The character(s) to use for the thousands separator

.. _`number_format`: https://secure.php.net/number_format
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/number_format.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 28,  82 => 27,  78 => 26,  74 => 25,  71 => 24,  60 => 16,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``number_format``
=================

The ``number_format`` filter formats numbers.  It is a wrapper around PHP's
`number_format`_ function:

.. code-block:: twig

    {{ 200.35|number_format }}

You can control the number of decimal places, decimal point, and thousands
separator using the additional arguments:

.. code-block:: twig

    {{ 9800.333|number_format(2, '.', ',') }}

To format negative numbers or math calculation, wrap the previous statement
with parentheses (needed because of Twig's :ref:`precedence of operators
<twig-expressions>`):

.. code-block:: twig

    {{ -9800.333|number_format(2, '.', ',') }} {# outputs : -9 #}
    {{ (-9800.333)|number_format(2, '.', ',') }} {# outputs : -9,800.33 #}
    {{  1 + 0.2|number_format(2) }} {# outputs : 1.2 #}
    {{ (1 + 0.2)|number_format(2) }} {# outputs : 1.20 #}

If no formatting options are provided then Twig will use the default formatting
options of:

* 0 decimal places.
* ``.`` as the decimal point.
* ``,`` as the thousands separator.

These defaults can be changed through the core extension:

.. code-block:: php

    \$twig = new \\Twig\\Environment(\$loader);
    \$twig->getExtension(\\Twig\\Extension\\CoreExtension::class)->setNumberFormat(3, '.', ',');

The defaults set for ``number_format`` can be over-ridden upon each call using the
additional parameters.

Arguments
---------

* ``decimal``:       The number of decimal points to display
* ``decimal_point``: The character(s) to use for the decimal point
* ``thousand_sep``:   The character(s) to use for the thousands separator

.. _`number_format`: https://secure.php.net/number_format
", "@app/vendor/twig/twig/doc/filters/number_format.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\number_format.rst");
    }
}
