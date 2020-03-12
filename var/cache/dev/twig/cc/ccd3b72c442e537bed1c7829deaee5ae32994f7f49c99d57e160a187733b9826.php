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

/* @app/vendor/twig/twig/doc/tags/flush.rst */
class __TwigTemplate_d82d01f61a42c6c0e7cdf3bd6b617b97707f8316f22f48e87f6f6b412ee6e40b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/tags/flush.rst"));

        // line 1
        echo "``flush``
=========

The ``flush`` tag tells Twig to flush the output buffer:

.. code-block:: twig

    ";
        // line 8
        flush();
        // line 9
        echo "
.. note::

    Internally, Twig uses the PHP `flush`_ function.

.. _`flush`: https://secure.php.net/flush
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/tags/flush.rst";
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``flush``
=========

The ``flush`` tag tells Twig to flush the output buffer:

.. code-block:: twig

    {% flush %}

.. note::

    Internally, Twig uses the PHP `flush`_ function.

.. _`flush`: https://secure.php.net/flush
", "@app/vendor/twig/twig/doc/tags/flush.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\tags\\flush.rst");
    }
}
