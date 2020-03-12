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

/* @app/vendor/doctrine/reflection/docs/en/index.rst */
class __TwigTemplate_be6abba3cfe68a53cf74b47df5f9c9a2ac7734754b276ed0dd68538cbfdf9c73 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/doctrine/reflection/docs/en/index.rst"));

        // line 1
        echo "Reflection Documentation
=================

The Doctrine Reflection documentation is a reference guide to everything you need
to know about the reflection project.

Getting Help
------------

If this documentation is not helping to answer questions you have about
Doctrine Reflection don't panic. You can get help from different sources:

-  The `Doctrine Mailing List <https://groups.google.com/group/doctrine-user>`_
-  Slack chat room `#reflection <https://www.doctrine-project.org/slack>`_
-  Report a bug on `GitHub <https://github.com/doctrine/reflection/issues>`_.
-  On `StackOverflow <https://stackoverflow.com/questions/tagged/doctrine-reflection>`_

Getting Started
---------------

The best way to get started is with the :doc:`Introduction <introduction>` section.
Use the sidebar to browse other documentation for the Doctrine PHP Reflection project.
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/doctrine/reflection/docs/en/index.rst";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Reflection Documentation
=================

The Doctrine Reflection documentation is a reference guide to everything you need
to know about the reflection project.

Getting Help
------------

If this documentation is not helping to answer questions you have about
Doctrine Reflection don't panic. You can get help from different sources:

-  The `Doctrine Mailing List <https://groups.google.com/group/doctrine-user>`_
-  Slack chat room `#reflection <https://www.doctrine-project.org/slack>`_
-  Report a bug on `GitHub <https://github.com/doctrine/reflection/issues>`_.
-  On `StackOverflow <https://stackoverflow.com/questions/tagged/doctrine-reflection>`_

Getting Started
---------------

The best way to get started is with the :doc:`Introduction <introduction>` section.
Use the sidebar to browse other documentation for the Doctrine PHP Reflection project.
", "@app/vendor/doctrine/reflection/docs/en/index.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\doctrine\\reflection\\docs\\en\\index.rst");
    }
}
