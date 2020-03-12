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

/* @app/vendor/twig/twig/doc/filters/striptags.rst */
class __TwigTemplate_dbfa9f419c10de8239927c99036eb046ee13633c1ca282a1d83af110c73903ca extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/striptags.rst"));

        // line 1
        echo "``striptags``
=============

The ``striptags`` filter strips SGML/XML tags and replace adjacent whitespace
by one space:

.. code-block:: twig

    ";
        // line 9
        echo twig_escape_filter($this->env, strip_tags((isset($context["some_html"]) || array_key_exists("some_html", $context) ? $context["some_html"] : (function () { throw new RuntimeError('Variable "some_html" does not exist.', 9, $this->source); })())), "html", null, true);
        echo "

You can also provide tags which should not be stripped:

.. code-block:: twig

    ";
        // line 15
        echo twig_escape_filter($this->env, strip_tags((isset($context["some_html"]) || array_key_exists("some_html", $context) ? $context["some_html"] : (function () { throw new RuntimeError('Variable "some_html" does not exist.', 15, $this->source); })()), "<br><p>"), "html", null, true);
        echo "

In this example, the ``<br/>``, ``<br>``, ``<p>``, and ``</p>`` tags won't be
removed from the string.

.. note::

    Internally, Twig uses the PHP `strip_tags`_ function.

Arguments
---------

* ``allowable_tags``: Tags which should not be stripped

.. _`strip_tags`: https://secure.php.net/strip_tags
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/striptags.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``striptags``
=============

The ``striptags`` filter strips SGML/XML tags and replace adjacent whitespace
by one space:

.. code-block:: twig

    {{ some_html|striptags }}

You can also provide tags which should not be stripped:

.. code-block:: twig

    {{ some_html|striptags('<br><p>') }}

In this example, the ``<br/>``, ``<br>``, ``<p>``, and ``</p>`` tags won't be
removed from the string.

.. note::

    Internally, Twig uses the PHP `strip_tags`_ function.

Arguments
---------

* ``allowable_tags``: Tags which should not be stripped

.. _`strip_tags`: https://secure.php.net/strip_tags
", "@app/vendor/twig/twig/doc/filters/striptags.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\striptags.rst");
    }
}
