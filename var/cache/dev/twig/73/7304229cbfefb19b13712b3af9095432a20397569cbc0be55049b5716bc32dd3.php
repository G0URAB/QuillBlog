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

/* @app/vendor/twig/twig/doc/functions/source.rst */
class __TwigTemplate_e483659fddd408b1294b92dc7179d5438632c90fd1bcc887fbbf153666581ef4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@app/vendor/twig/twig/doc/functions/source.rst"));

        // line 1
        echo "``source``
==========

The ``source`` function returns the content of a template without rendering it:

.. code-block:: twig

    ";
        // line 8
        echo twig_source($this->env, "template.html");
        echo "
    ";
        // line 9
        echo twig_source($this->env, (isset($context["some_var"]) || array_key_exists("some_var", $context) ? $context["some_var"] : (function () { throw new RuntimeError('Variable "some_var" does not exist.', 9, $this->source); })()));
        echo "

When you set the ``ignore_missing`` flag, Twig will return an empty string if
the template does not exist:

.. code-block:: twig

    ";
        // line 16
        echo twig_source($this->env, "template.html", true);
        echo "

The function uses the same template loaders as the ones used to include
templates. So, if you are using the filesystem loader, the templates are looked
for in the paths defined by it.

Arguments
---------

* ``name``: The name of the template to read
* ``ignore_missing``: Whether to ignore missing templates or not
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@app/vendor/twig/twig/doc/functions/source.rst";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  53 => 9,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("``source``
==========

The ``source`` function returns the content of a template without rendering it:

.. code-block:: twig

    {{ source('template.html') }}
    {{ source(some_var) }}

When you set the ``ignore_missing`` flag, Twig will return an empty string if
the template does not exist:

.. code-block:: twig

    {{ source('template.html', ignore_missing = true) }}

The function uses the same template loaders as the ones used to include
templates. So, if you are using the filesystem loader, the templates are looked
for in the paths defined by it.

Arguments
---------

* ``name``: The name of the template to read
* ``ignore_missing``: Whether to ignore missing templates or not
", "@app/vendor/twig/twig/doc/functions/source.rst", "C:\\wamp64\\www\\QuillBlog\\vendor\\twig\\twig\\doc\\functions\\source.rst");
    }
}
