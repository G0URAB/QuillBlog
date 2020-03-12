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

/* @app/vendor/twig/twig/doc/filters/spaceless.rst */
class __TwigTemplate_493f2317002769be67ffbfe54de2232bf894736fef496fe942d3188772929d75 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/spaceless.rst"));

        // line 1
        echo "``spaceless``
=============

Use the ``spaceless`` filter to remove whitespace *between HTML tags*, not
whitespace within HTML tags or whitespace in plain text:

.. code-block:: twig

    ";
        // line 9
        echo twig_spaceless("<div>
            <strong>foo</strong>
        </div>
        ");
        // line 13
        echo "

    ";
        // line 16
        echo "
You can combine ``spaceless`` with the ``apply`` tag to apply the transformation
on large amounts of HTML:

.. code-block:: twig

    ";
        // line 22
        $___internal_e7db258a13bd6d4e701c58521a8335592be9d2da93861ffd6c5fc7232f778992_ = ('' === $tmp = "        <div>
            <strong>foo</strong>
        </div>
    ") ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_spaceless($___internal_e7db258a13bd6d4e701c58521a8335592be9d2da93861ffd6c5fc7232f778992_);
        // line 27
        echo "
    ";
        // line 29
        echo "
This tag is not meant to \"optimize\" the size of the generated HTML content but
merely to avoid extra whitespace between HTML tags to avoid browser rendering
quirks under some circumstances.

.. caution::

    As the filter uses a regular expression behind the scenes, its performance
    is directly related to the text size you are working on (remember that
    filters are executed at runtime).

.. tip::

    If you want to optimize the size of the generated HTML content, gzip
    compress the output instead.

.. tip::

    If you want to create a tag that actually removes all extra whitespace in
    an HTML string, be warned that this is not as easy as it seems to be
    (think of ``textarea`` or ``pre`` tags for instance). Using a third-party
    library like Tidy is probably a better idea.

.. tip::

    For more information on whitespace control, read the
    :ref:`dedicated section <templates-whitespace-control>` of the documentation and learn how
    you can also use the whitespace control modifier on your tags.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/spaceless.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 29,  73 => 27,  67 => 22,  59 => 16,  55 => 13,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``spaceless``
=============

Use the ``spaceless`` filter to remove whitespace *between HTML tags*, not
whitespace within HTML tags or whitespace in plain text:

.. code-block:: twig

    {{
        \"<div>
            <strong>foo</strong>
        </div>
        \"|spaceless }}

    {# output will be <div><strong>foo</strong></div> #}

You can combine ``spaceless`` with the ``apply`` tag to apply the transformation
on large amounts of HTML:

.. code-block:: twig

    {% apply spaceless %}
        <div>
            <strong>foo</strong>
        </div>
    {% endapply %}

    {# output will be <div><strong>foo</strong></div> #}

This tag is not meant to \"optimize\" the size of the generated HTML content but
merely to avoid extra whitespace between HTML tags to avoid browser rendering
quirks under some circumstances.

.. caution::

    As the filter uses a regular expression behind the scenes, its performance
    is directly related to the text size you are working on (remember that
    filters are executed at runtime).

.. tip::

    If you want to optimize the size of the generated HTML content, gzip
    compress the output instead.

.. tip::

    If you want to create a tag that actually removes all extra whitespace in
    an HTML string, be warned that this is not as easy as it seems to be
    (think of ``textarea`` or ``pre`` tags for instance). Using a third-party
    library like Tidy is probably a better idea.

.. tip::

    For more information on whitespace control, read the
    :ref:`dedicated section <templates-whitespace-control>` of the documentation and learn how
    you can also use the whitespace control modifier on your tags.
", "@app/vendor/twig/twig/doc/filters/spaceless.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\spaceless.rst");
    }
}
