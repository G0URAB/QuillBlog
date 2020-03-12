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

/* @app/vendor/twig/twig/doc/filters/format_time.rst */
class __TwigTemplate_09486cb26fc0d03113a82bbb2c5cf41808a0f0525be721aab0b4d59234b70588 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/format_time.rst"));

        // line 1
        echo "``format_time``
===============

The ``format_time`` filter formats a time. It behaves in the exact same way as
the ``format_datetime`` filter, but without the date.

.. note::

    The ``format_time`` filter is part of the ``IntlExtension`` which is not
    installed by default. Install it first:

    .. code-block:: bash

        \$ composer req twig/intl-extra

    Then, use the ``twig/extra-bundle`` on Symfony projects or add the extension
    explictly on the Twig environment::

        use Twig\\Extra\\Intl\\IntlExtension;

        \$twig = new \\Twig\\Environment(...);
        \$twig->addExtension(new IntlExtension());

Arguments
---------

* ``locale``: The locale
* ``timeFormat``: The time format
* ``pattern``: A date time pattern
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/format_time.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``format_time``
===============

The ``format_time`` filter formats a time. It behaves in the exact same way as
the ``format_datetime`` filter, but without the date.

.. note::

    The ``format_time`` filter is part of the ``IntlExtension`` which is not
    installed by default. Install it first:

    .. code-block:: bash

        \$ composer req twig/intl-extra

    Then, use the ``twig/extra-bundle`` on Symfony projects or add the extension
    explictly on the Twig environment::

        use Twig\\Extra\\Intl\\IntlExtension;

        \$twig = new \\Twig\\Environment(...);
        \$twig->addExtension(new IntlExtension());

Arguments
---------

* ``locale``: The locale
* ``timeFormat``: The time format
* ``pattern``: A date time pattern
", "@app/vendor/twig/twig/doc/filters/format_time.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\format_time.rst");
    }
}
