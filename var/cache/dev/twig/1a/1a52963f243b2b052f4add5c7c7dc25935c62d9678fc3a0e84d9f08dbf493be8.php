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

/* @app/vendor/twig/twig/doc/functions/index.rst */
class __TwigTemplate_588ec52b66a15dfb3fb37ed030daac2bed37f0095b8c8364382eaf81cc6830f9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/functions/index.rst"));

        // line 1
        echo "Functions
=========

.. toctree::
    :maxdepth: 1

    attribute
    block
    constant
    cycle
    date
    dump
    html_classes
    include
    max
    min
    parent
    random
    range
    source
    country_timezones
    template_from_string
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/functions/index.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Functions
=========

.. toctree::
    :maxdepth: 1

    attribute
    block
    constant
    cycle
    date
    dump
    html_classes
    include
    max
    min
    parent
    random
    range
    source
    country_timezones
    template_from_string
", "@app/vendor/twig/twig/doc/functions/index.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\functions\\index.rst");
    }
}
