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

/* @app/vendor/twig/twig/doc/functions/date.rst */
class __TwigTemplate_aa0d06385c6b79855ba36ce6ba7ee702eef6fc1293ae99fdf82dd7bfcb18be9d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/functions/date.rst"));

        // line 1
        echo "``date``
========

Converts an argument to a date to allow date comparison:

.. code-block:: twig

    ";
        // line 8
        if (-1 === twig_compare(twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "created_at", [], "any", false, false, false, 8)), twig_date_converter($this->env, "-2days"))) {
            // line 9
            echo "        ";
            // line 10
            echo "    ";
        }
        // line 11
        echo "
The argument must be in one of PHP’s supported `date and time formats`_.

You can pass a timezone as the second argument:

.. code-block:: twig

    ";
        // line 18
        if (-1 === twig_compare(twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "created_at", [], "any", false, false, false, 18)), twig_date_converter($this->env, "-2days", "Europe/Paris"))) {
            // line 19
            echo "        ";
            // line 20
            echo "    ";
        }
        // line 21
        echo "
If no argument is passed, the function returns the current date:

.. code-block:: twig

    ";
        // line 26
        if (-1 === twig_compare(twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "created_at", [], "any", false, false, false, 26)), twig_date_converter($this->env))) {
            // line 27
            echo "        ";
            // line 28
            echo "    ";
        }
        // line 29
        echo "
.. note::

    You can set the default timezone globally by calling ``setTimezone()`` on
    the ``core`` extension instance:

    .. code-block:: php

        \$twig = new \\Twig\\Environment(\$loader);
        \$twig->getExtension(\\Twig\\Extension\\CoreExtension::class)->setTimezone('Europe/Paris');

Arguments
---------

* ``date``:     The date
* ``timezone``: The timezone

.. _`date and time formats`: https://secure.php.net/manual/en/datetime.formats.php
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/functions/date.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  83 => 28,  81 => 27,  79 => 26,  72 => 21,  69 => 20,  67 => 19,  65 => 18,  56 => 11,  53 => 10,  51 => 9,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``date``
========

Converts an argument to a date to allow date comparison:

.. code-block:: twig

    {% if date(user.created_at) < date('-2days') %}
        {# do something #}
    {% endif %}

The argument must be in one of PHP’s supported `date and time formats`_.

You can pass a timezone as the second argument:

.. code-block:: twig

    {% if date(user.created_at) < date('-2days', 'Europe/Paris') %}
        {# do something #}
    {% endif %}

If no argument is passed, the function returns the current date:

.. code-block:: twig

    {% if date(user.created_at) < date() %}
        {# always! #}
    {% endif %}

.. note::

    You can set the default timezone globally by calling ``setTimezone()`` on
    the ``core`` extension instance:

    .. code-block:: php

        \$twig = new \\Twig\\Environment(\$loader);
        \$twig->getExtension(\\Twig\\Extension\\CoreExtension::class)->setTimezone('Europe/Paris');

Arguments
---------

* ``date``:     The date
* ``timezone``: The timezone

.. _`date and time formats`: https://secure.php.net/manual/en/datetime.formats.php
", "@app/vendor/twig/twig/doc/functions/date.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\functions\\date.rst");
    }
}
