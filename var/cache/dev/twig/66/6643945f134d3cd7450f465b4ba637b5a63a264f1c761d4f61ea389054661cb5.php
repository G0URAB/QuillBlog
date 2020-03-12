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

/* @app/vendor/twig/twig/doc/filters/date_modify.rst */
class __TwigTemplate_1c9dd21e1b658eee4be0637e4545f03b710c6f5302e5f5c97e8a35ac21af8ced extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/filters/date_modify.rst"));

        // line 1
        echo "``date_modify``
===============

The ``date_modify`` filter modifies a date with a given modifier string:

.. code-block:: twig

    ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 8, $this->source); })()), "published_at", [], "any", false, false, false, 8), "+1 day"), "m/d/Y"), "html", null, true);
        echo "

The ``date_modify`` filter accepts strings (it must be in a format supported
by the `strtotime`_ function) or `DateTime`_ instances. You can combine
it with the :doc:`date<date>` filter for formatting.

Arguments
---------

* ``modifier``: The modifier

.. _`strtotime`: https://secure.php.net/strtotime
.. _`DateTime`:  https://secure.php.net/DateTime
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/filters/date_modify.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``date_modify``
===============

The ``date_modify`` filter modifies a date with a given modifier string:

.. code-block:: twig

    {{ post.published_at|date_modify(\"+1 day\")|date(\"m/d/Y\") }}

The ``date_modify`` filter accepts strings (it must be in a format supported
by the `strtotime`_ function) or `DateTime`_ instances. You can combine
it with the :doc:`date<date>` filter for formatting.

Arguments
---------

* ``modifier``: The modifier

.. _`strtotime`: https://secure.php.net/strtotime
.. _`DateTime`:  https://secure.php.net/DateTime
", "@app/vendor/twig/twig/doc/filters/date_modify.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\filters\\date_modify.rst");
    }
}
