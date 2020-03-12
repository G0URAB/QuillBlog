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

/* @app/vendor/twig/twig/doc/filters/trim.rst */
class __TwigTemplate_0e4c2094f82daade0196ec638904680803df8ffd95da214e60dc5bf880bb93d6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/trim.rst"));

        // line 1
        echo "``trim``
========

The ``trim`` filter strips whitespace (or other characters) from the beginning
and end of a string:

.. code-block:: twig

    ";
        // line 9
        echo twig_escape_filter($this->env, twig_trim_filter("  I like Twig.  "), "html", null, true);
        echo "

    ";
        // line 12
        echo "
    ";
        // line 13
        echo twig_escape_filter($this->env, twig_trim_filter("  I like Twig.", "."), "html", null, true);
        echo "

    ";
        // line 16
        echo "
    ";
        // line 17
        echo twig_escape_filter($this->env, twig_trim_filter("  I like Twig.  ", null, "left"), "html", null, true);
        echo "

    ";
        // line 20
        echo "
    ";
        // line 21
        echo twig_escape_filter($this->env, twig_trim_filter("  I like Twig.  ", " ", "right"), "html", null, true);
        echo "

    ";
        // line 24
        echo "
.. note::

    Internally, Twig uses the PHP `trim`_, `ltrim`_, and `rtrim`_ functions.

Arguments
---------

* ``character_mask``: The characters to strip

* ``side``: The default is to strip from the left and the right (`both`) sides, but `left`
  and `right` will strip from either the left side or right side only

.. _`trim`: https://secure.php.net/trim
.. _`ltrim`: https://secure.php.net/ltrim
.. _`rtrim`: https://secure.php.net/rtrim
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/trim.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  74 => 21,  71 => 20,  66 => 17,  63 => 16,  58 => 13,  55 => 12,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``trim``
========

The ``trim`` filter strips whitespace (or other characters) from the beginning
and end of a string:

.. code-block:: twig

    {{ '  I like Twig.  '|trim }}

    {# outputs 'I like Twig.' #}

    {{ '  I like Twig.'|trim('.') }}

    {# outputs '  I like Twig' #}

    {{ '  I like Twig.  '|trim(side='left') }}

    {# outputs 'I like Twig.  ' #}

    {{ '  I like Twig.  '|trim(' ', 'right') }}

    {# outputs '  I like Twig.' #}

.. note::

    Internally, Twig uses the PHP `trim`_, `ltrim`_, and `rtrim`_ functions.

Arguments
---------

* ``character_mask``: The characters to strip

* ``side``: The default is to strip from the left and the right (`both`) sides, but `left`
  and `right` will strip from either the left side or right side only

.. _`trim`: https://secure.php.net/trim
.. _`ltrim`: https://secure.php.net/ltrim
.. _`rtrim`: https://secure.php.net/rtrim
", "@app/vendor/twig/twig/doc/filters/trim.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\trim.rst");
    }
}
